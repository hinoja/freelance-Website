<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequestJob;
use App\Models\Job;
use App\Models\Requirement;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd('passe');
        $job = Job::findOrFail($id);
        $requirement = Requirement::where('job_id', $id)->get();
        // $requirement=Requirement::all();
        // $requirement=$job->requirements();
        // dd($requirement);
        return view('customer.showJob', ['job' => $job, 'requirement' => $requirement]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job = Job::orderBy('created_at', 'DESC');

        return view('welcome', ['job' => Job::orderBy('created_at', 'DESC')->paginate(5), 'job2' => $job->paginate(3)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequestJob $request)
    {
        $jobarray =
        ([
            'title' => $request->title,
            'location' => $request->location,
            'category_id' => $request->category,
            'type' => $request->type,
            'salary' => $request->salary,
            'start_at' => $request->startDate,
            'deadline' => $request->endDate,
            'description' => $request->summary,
            'companyName' => $request->company_name,
            'companyDescription' => $request->company_description,
            'customer_id' => Auth::user()->userable->id,
        ]);
        $tag_id = $request->tag;

        $requirement = $request->requirements;

        $job = Job::create($jobarray);

        $job->tags()->attach($tag_id);

        $requirement = array_filter($requirement);
        foreach ($requirement as $requirements) {
            $datarequirement = [
                'name' => $requirements,
                'job_id' => (int) $job->id,
            ];
            Requirement::updateOrCreate($datarequirement);
        }

        Toastr::success('Thanks,You have added The Job with title ('.$request->title.')   with successful :)', 'Success!!');

        return redirect()->route('job.manage');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function resume()
    {
        if (empty(Job::where('customer_id', Auth::user()->userable->id)->get())) {
            return redirect()->route('job.index');
        } else {
            $job = Job::where('customer_id', Auth::user()->userable->id)->get();

            return view('customer.manage-jobs', ['jobs' => $job, 'customer' => Auth::user()->userable]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function browsejob()
    {
        $job = Job::orderBy('created_at', 'DESC');

        return view('customer.browse-jobs', ['job' => $job->paginate(6)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
