<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Links;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experience = Experience::all();
        $link = Links::all();
        if (Auth::user() && Auth::user()->userable_type = 'App\Models\Freelance') {
            $auth = Auth::user()->userable_id;
            foreach ($experience as $exp) {
                // $exp->freelance_id
                // dd($experience->freelance_id);
                if ($exp->freelance_id === $auth) {
                    return redirect()->route('job');
                } else {
                    return redirect()->route('resume.index');
                }
            }
        } else {
            return redirect()->route('login.view');
        }
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
    public function store(Request $request)
    {
        // dd($request);
        // $data=[];
        // $data = htmlspecialchars($data[]);
        // $request->validate([
        //     // experience
        //     'start_date[]' => ['date', 'required'],
        //     'end_date[]' => ['date', 'required', 'after_or_equal:start_date'],
        //     'company[]' => ['required', 'min:2', 'string'],
        //     'job_title[]' => ['required', 'min:2', 'string'],
        //     //  url
        //     'url[]' => ['url', 'required'],
        //     'name_url[]' => ['string', 'required'],
        // ]);

        $experience = Experience::updateOrCreate(
            ['start_at' => $request->start_date,
                'end_at' => $request->end_date,
                'company' => $request->company,
                'job_title' => $request->job_title,
                'freelance_id' => Auth::user()->userable->id,
            ]
        );
        $link = Links::updateOrCreate(

            ['name' => $request->name_url,
                'url' => $request->url,
                'freelance_id' => Auth::user()->userable->id,
            ]
        );

        dd($request);
        // $experience=new Experience();
        // $experience->start_at=$request->start_date;
        // $experience->end_at=$request->end_date;
        // $experience->company=$request->company;
        // $experience->job_title=$request->job_title;
        // $experience->freelance_id=Auth::user()->userable->id;
        // $experience->save();
        // $link=new Links();
        // $link->name=$request->name_url;
        // $link->url=$request->url;
        // $link->freelance_id=Auth::user()->userable->id;
        // $link->save();
        return redirect()->route('job.view');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
