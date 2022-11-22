<?php

namespace App\Http\Controllers\customer;

use App\Models\Job;
use App\Models\Requirement;
use Illuminate\Support\Str;
use App\Models\freelance_jobs;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePostRequestJob;
use Illuminate\Support\Facades\Notification;
use App\Notifications\CancelJob\CancelCustomerNotification;
use App\Notifications\CancelJob\CancelFreelanceNotification;

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
        return view('welcome', ['job' => Job::orderBy('created_at', 'DESC')->get()->take(4), 'job2' => $job->paginate(3)]);
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
                // 'email' => $request->email,
                'location' => $request->location,
                'category_id' => $request->category,
                'status_id' => $request->status_id,
                'salary' => $request->salary,
                'begin' => $request->closingDate, //begin date to apply
                'deadline' => $request->closingDate, //end date to apply
                // 'start_at' => $request->openingDate,
                // 'end_at' => $request->openingDate,
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
        //    $job = Job::where('slug', '=', $slug)->first();
        // $requirement = $job->requirements()->get();
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
            // $job = Job::where('customer_id', Auth::user()->userable->id)->get();
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
        // $job = Job::orderBy('created_at', 'DESC');

        return view('customer.browse-jobs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function finish(Job $job)
    {
        // Notification::send($freelance, new ToFreelanceNotificationsApply($freelance, $customer, $job));
        $freelance_job = freelance_jobs::Where('job_id', $job->id)->first();
        // $freelance_job->is_hired = 1; //activate
        $job->end_at = now();
        $job->save();
        // $freelance_job->save();
        $job->states()->attach(2); //finish state
        Toastr::success(' (' . $job->title . ')   is mark as  Finish :)', 'Success!!');
        return back();
    }
    /**
     *Here,we want to cancel a job
     */
    public function cancel(Job $job)
    {
        $freelance_job = freelance_jobs::Where('job_id', $job->id)->first();
        // $freelance_job->is_hired = 0; //cancel activate
        $job->end_at = null;
        $customer=$job->customer;
        $job->save();
        $job->states()->detach(2); //finish-cancel state
        foreach($job->freelances as $freelance){
            Notification::send($freelance, new CancelFreelanceNotification($freelance, $customer, $job));
        }
        Toastr::Info(' (' . $job->title . ')   is Not  Finish :)', 'Info!!');
        return back();
    }

    /**
     * Here we try to do a softdelete of a job
     */
    public function delete(Job $job)
    {
        $job->delete();
        Toastr::Success(' (' . $job->title . ')   is deleted  successfully :)', 'Success!!');
        //notififier les freelances ayant participer aux jobs et aux clients
        return back();
    }
}
