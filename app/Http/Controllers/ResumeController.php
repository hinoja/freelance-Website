<?php

namespace App\Http\Controllers;


use App\Models\Links;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            foreach ($experience as $exp)
             {
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
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $company = $request->company;
        $job_title = $request->job_title;
        $url = $request->url;
        $name_url = $request->name_url;
        // dd($name_url);
        for ($i = 0; $i < count($start_date) - 1; $i++) {
            //  $request->validate
            //  ([
            //     // experience
            //     "start_date[$i]" => ['date', 'required'],
            //     "end_date[$i]" => ['date', 'required', 'after_or_equal:start_date'],
            //     "company[$i]" => ['required', 'min:2', 'string'],
            //     "job_title[$i]" => ['required', 'min:2', 'string'],
            //     //  url
            //       "url[$i]" => ['url', 'required'],
            //     "name_url[$i]" => ['string', 'required'],
            //  ]);

            $dataexp = [
                'start_at' => $start_date[$i],
                'end_at' => $end_date[$i],
                'company' => $company[$i],
                'job_title' => $job_title[$i],
                'freelance_id' => Auth::user()->userable->id,
            ];
            $dataurl = [
                'name' => $name_url[$i],
                'url' => $url[$i],
                'freelance_id' => Auth::user()->userable->id,
            ];
            Links::updateOrCreate($dataurl);
            Experience::updateOrCreate($dataexp);
        }

        // $experience = Experience::updateOrCreate(
        //     ['start_at' => $request->start_date,
        //         'end_at' => $request->end_date,
        //         'company' => $request->company,
        //         'job_title' => $request->job_title,
        //         'freelance_id' => Auth::user()->userable->id,
        //     ]
        // );
        // $link = Links::updateOrCreate(

        //     ['name' => $request->name_url,
        //         'url' => $request->url,
        //         'freelance_id' => Auth::user()->userable->id,
        //     ]
        // );
        toastr()->success('Profil is create with successful');

        return redirect()->route('job');
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
