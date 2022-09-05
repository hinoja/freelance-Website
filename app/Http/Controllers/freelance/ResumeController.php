<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreResumeRequest;
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
        // dd(Auth::user());
        if (Auth::check()) {
            $experience = Experience::where('freelance_id', Auth::user()->userable_id)->get();

            if (count($experience) === 0) {
                return redirect()->route('resume.index');
            } else {
                return redirect()->route('resume.manage');
            }
        } else {
            return redirect()->route('job');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resume()
    {
        if (Auth::check()) {
            if (empty(Experience::where('freelance_id', Auth::user()->userable->id)->get())) {
                return redirect()->route('resume.index');
            } else {
                $experi = Experience::where('freelance_id', Auth::user()->userable->id)->get();

                return view('freelance.manage-resumes', ['experiences' => $experi, 'freelance' => Auth::user()->userable]);
            }
        } else {
            return redirect()->route('job');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreResumeRequest $request)
    {
        $validated = $request->validate();
        $validated = $request->safe();
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $company = $request->company;
        $job_title = $request->job_title;
        $url = $request->url;
        $name_url = $request->name_url;

        $freelance = Auth::user()->userable;
        $freelance->description = $request->description;
        $freelance->location = $request->location;
        $freelance->profession = $request->title;
        $freelance->save();

        for ($i = 0; $i < count($start_date) - 1; $i++) {
            $dataexp =
                        [
                            'start_at' => $start_date[$i],
                            'end_at' => $end_date[$i],
                            'company' => $company[$i],
                            'job_title' => $job_title[$i],
                            'freelance_id' => Auth::user()->userable->id,
                        ];
            Experience::updateOrCreate($dataexp);
        }

        for ($i = 0; $i < count($url) - 1; $i++) {
            $dataurl = [
                'name' => $name_url[$i],
                'url' => $url[$i],
                'freelance_id' => Auth::user()->userable->id,
            ];
            Links::updateOrCreate($dataurl);
        }
        toastr()->success('Thanks,Your Profil ('.count($url).'Link(s) And '.count($start_date).'Experience(s) ) have created  with successful');
        // dd('test');
        return redirect()->route('resume.manage');
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
