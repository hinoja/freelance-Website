<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequestJob;
use App\Models\Job;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //    $validated= $request->validate();
        //     $validated = $request->safe();
        //  dd( Auth::user());
        $array =
        ([
            'title' => $request->title,
            'email' => $request->email,
            'location' => $request->location,
            'category_id' => $request->category,
            'type' => $request->type,
            // 'tag'=>$request->tag,
            'salary' => $request->salary,
            'start_at' => $request->startDate,
            'deadline' => $request->endDate,
            'description' => $request->summary,
            'companyName' => $request->company_name,
            'companyDescription' => $request->company_description,
            'customer_id' => Auth::user()->userable->id,

        ]);
        Job::create($array);
        Toastr::success('Thanks,You have added The Job ('.$request->title.')   with successful :)', 'Success!!');

        return redirect()->route('job.manage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function resume()
    {
        if (Auth::check()) {
            if (empty(Job::where('customer_id', Auth::user()->userable->id)->get())) {
                return redirect()->route('job.index');
            } else {
                $job = Job::where('customer_id', Auth::user()->userable->id)->get();

                return view('customer.manage-jobs', ['jobs' => $job, 'customer' => Auth::user()->userable]);
            }
        } else {
            return redirect()->route('welcome');
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

        return view('customer.browse-jobs', ['jobs' => $job->paginate(2)]);
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
