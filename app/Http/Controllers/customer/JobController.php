<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequestJob;
use App\Models\Job;
use App\Models\Requirement;
use Brian2694\Toastr\Facades\Toastr;
use Flasher\Laravel\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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

        return view('welcome', ['job' => Job::orderBy('created_at', 'DESC')->paginate(4), 'job2' => $job->paginate(3)]);
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
            'start_at' => $request->openingDate,
            'deadline' => $request->closingDate,
            'description' => $request->summary,
            'companyName' => $request->company_name,
            'companyDescription' => $request->company_description,
            'customer_id' => Auth::user()->userable->id,
        ]);
        $tag_id = $request->tag;

        $requirement = $request->requirements;

        $job = Job::create($array);

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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // $slug =$job->slug;
        $job = Job::where('slug', '=', $slug)->first();
        // $requirement = $job->requirements()->get();
        return view('customer.showJob', ['job' => $job]);
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
                // $job = Job::where('customer_id', Auth::user()->userable->id)->get();

                return view('customer.manage-jobs');
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
        // $job = Job::orderBy('created_at', 'DESC');

        return view('customer.browse-jobs');
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
