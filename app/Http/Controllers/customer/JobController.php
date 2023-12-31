<?php

namespace App\Http\Controllers\customer;

use App\Models\Job;
use App\Models\User;
use App\Models\Requirement;
use Illuminate\Support\Str;
use App\Models\freelance_jobs;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePostRequestJob;
use App\Models\Category;
use App\Models\Job_state;
use App\Models\JobTag;
use App\Models\Tag;
use Illuminate\Support\Facades\Notification;
use App\Notifications\CancelJob\CancelFreelanceNotification;
use App\Notifications\FinishJob\FinishFreelanceNotification;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job = Job::orderBy('created_at', 'DESC');
        return view('welcome', ['job' => Job::orderBy('created_at', 'DESC')->get()->take(4),'categories'=>Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequestJob $request)
    {
        $array =
            ([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'location' => $request->location,
                'category_id' => $request->category,
                'status_id' => $request->status_id,
                'salary' => $request->salary,
                'begin' => $request->closingDate, //begin date to apply
                'deadline' => $request->closingDate, //end date to apply
                'description' => $request->summary,
                'companyName' => $request->company_name,
                'companyDescription' => $request->company_description,
                'customer_id' => Auth::user()->userable->id,
            ]);
        // 'state_id' => 3,
        $tag_id = $request->tag;
        $requirement = $request->requirements;
        $job = Job::firstOrCreate($array);
        $job->tags()->attach($tag_id);
        $job->states()->attach(3);
        $requirement = array_filter($requirement);
        foreach ($requirement as $requirements) {
            $datarequirement = [
                'name' => $requirements,
                'job_id' => $job->id,
            ];
            Requirement::updateOrCreate($datarequirement);
        }
        Toastr::success('Thanks,You have added The Job with title (' . $request->title . ')   with successful :)', 'Success!!');
        return redirect()->route('job.manage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        return view('customer.showJob', ['job' => $job]);
    }

    /**
     * show list of a job who a customer adds in the database
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function resume()
    {
        if (empty(Job::where('customer_id', Auth::user()->userable->id)->get())) {
            return redirect()->route('job.index');
        } else {
            return view('customer.manage-jobs');
        }
    }

    /**
     *  allows do action to search a job in database
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function browsejob()
    {
        return view('customer.browse-jobs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function finish(Job $job) //mark like doing
    {
        //au prealable avoir choisi un freelance pour le job
        $customer = $job->customer->user;
        $freelance_job = freelance_jobs::Where('job_id', $job->id)->where('is_hired', 1)->get();
        if ($job->start_at ) {
            $freelance_job = freelance_jobs::where('job_id', $job->id)->first();
            $job->end_at = now();
            $job->save();
            $freelance = User::where('userable_id', $freelance_job->freelance_id)->first();
            $job->states()->attach(2); //finish state
            Notification::send($customer, new FinishFreelanceNotification($freelance, $customer, $job));
            Toastr::success(' (' . $job->title . ')   is mark as  Finish :)', 'Success!!');
        } else {
            Toastr::Warning(' This Job is not launch or in progress,Please verify :)', 'Error!!');
        }
        return back();
    }



    /**
     *Here,we want to cancel mark filled in job
     */
    public function launch(Job $job)
    {
        // $freelance_job = freelance_jobs::Where('job_id', $job->id)->first();
        // $freelance_job->is_hired = 0; //cancel activate
        $customer = $job->customer->user;
        $freelance_job = freelance_jobs::Where('job_id', $job->id)->where('is_hired', 1)->get();
        if ($freelance_job) {
            $freelance_job = freelance_jobs::where('job_id', $job->id)->first();
            $job->start_at = now();
            $job->end_at = null;
            $job->save();
            // $freelance = User::where('userable_id', $freelance_job->freelance_id)->first();
            $job->states()->attach(1); //In progress state
            // Notification::send($customer, new FinishFreelanceNotification($freelance, $customer, $job));
            Toastr::Info(' (' . $job->title . ')   is mark as  * In Progress * :)', 'Info!!');
        } else {
            Toastr::Warning(' (' . $job->title . ') has not a selected Freelance like choice,Please verify :)', 'Error!!');
        }
        return back();
    }

    /**
     * Here we try to do a softdelete of a job
     */
    public function delete(Job $job)
    {
        $customer = $job->customer->user;
        $freelance_job = freelance_jobs::Where('job_id', $job->id)->where('is_hired', 1)->get();
        foreach ($job->freelances as $freelance) {
            Notification::send($freelance->user, new CancelFreelanceNotification($freelance->user, $customer, $job));
        }
        // dd("passe");
        $requirements = Requirement::where('job_id', $job->id)->get();
        foreach ($requirements as $requirement) {
            $requirement->delete();
        }
        $jobStates = Job_state::where('job_id', $job->id)->get();
        foreach ($jobStates as $itemState) {
            $itemState->delete();
        }
        $jobTags = JobTag::where('job_id', $job->id)->get();
        foreach ($jobTags as $itemTag) {
            $itemTag->delete();
        }
        $freelanceJob = freelance_jobs::where('job_id', $job->id)->get();
        foreach ($freelanceJob as $item) {
            $item->delete();
        }

        $job->delete();
        Toastr::Success(' (' . $job->title . ')   is Cancelled with successfully :)', 'Success!!');
        //notififier les freelances ayant participer aux jobs et aux clients
        return back();
    }
}
