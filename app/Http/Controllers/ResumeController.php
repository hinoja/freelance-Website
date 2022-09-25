<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Freelance;
use App\Models\Links;
use Illuminate\Auth\Events\Logout;
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
        // $freelance = ;
        if( Auth::check())
        {
                if(Freelance::where('id', Auth::user()->userable_id)->first()  && Auth::user()->role_id === 1 )
            {
                $freelance=Freelance::where('id', Auth::user()->userable_id )->first();
                $experi = Experience::where('freelance_id', $freelance->id)->get();
                if (count($experi) > 0)
                {
                    return view('manage-resumes', ['experiences' => $experi, 'freelance' => $freelance]);
                } else
                {
                    return redirect()->route('resume.index');
                }
            }
        }
        else
        {
            return redirect()->route('logout');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             $request->validate([
            'location' => ['required','string'],
            'title' => ['required','string'],
            'description' => ['required','string'],
            'start_date' => ['nullable', 'array'],
            'start_date.*' => ['nullable', 'date', 'nullable'],
            'end_date' => ['nullable', 'array'],
            'end_date.*' => ['date', 'nullable', 'nullable', 'after_or_equal:start_date.*'],
            'company' => ['nullable', 'array'],
            'company.count.*' => ['nullable', 'string', 'nullable'],
            'job_title' => ['nullable',  'array'],
            'job_title.count.*' => ['nullable',  'string', 'nullable'],
            'url' => ['nullable',  'array'],
            'url.*' => ['nullable' ],
            'name_url' => ['nullable',  'array'],
            'name_url.*' => ['nullable', 'string'],
        ]);
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $company = $request->company;
        $job_title = $request->job_title;
        $url = $request->url;
        $name_url = $request->name_url;

        $freelance= Freelance::where('id', Auth::user()->userable_id)->first();
        $freelance->description=$request->description;
        $freelance->location=$request->location;
        $freelance->profession=$request->title;
        $freelance->save();

        for ($i = 1; $i< count($start_date); $i++) {
              $dataexp =
                    [
                        'start_at' => $start_date[$i],
                        'end_at' => $end_date[$i],
                        'company' => $company[$i],
                        'job_title' => $job_title[$i],
                        'freelance_id' => Auth::user()->userable->id,
                    ];
            Experience::Create($dataexp);
        }
        for ($i = 1; $i < count($url) ; $i++) {
            $dataurl = [
                'name' => $name_url[$i],
                'url' => $url[$i],
                'freelance_id' => Auth::user()->userable->id,
            ];
            Links::updateOrCreate($dataurl);
        }
        toastr()->success('Thanks,Your Profil ('.count($url).'Link(s) And '.count($start_date).'Experience(s) ) have created  with successful');

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
