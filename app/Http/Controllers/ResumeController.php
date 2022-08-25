<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Freelance;
use App\Models\Links;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
        if (Auth::user() && Auth::user()->userable_type === 'App\Models\Freelance')
        {
            $auth = Auth::user()->userable_id;
            $experience = Experience::where('freelance_id', Auth::user()->userable_id)->get();
            foreach ($experience as $exp)
             {
                // $exp->freelance_id
                // dd($exp->freelance_id);

                if ($exp->freelance_id === $auth)
                {
                    return redirect()->route('job');
                } else
                {
                    return redirect()->route('resume.index');
                }
            }
        } else {
            // return redirect()->route('job');
            dd("vous n'etes pas un freelance, vous serez redirigé vers votre page");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resume()
    {

        if (Auth::user() && Auth::user()->userable_type === 'App\Models\Freelance')
        {

            $freelance = Freelance::where('id', Auth::user()->userable_id)->first();
            $name = Auth::user()->name;
            $experi = Experience::where('freelance_id', $freelance->id)->get();
            if ($freelance && count($experi)>0)
            {
                return view('manage-resumes', ['experiences' => $experi, 'freelance' => $freelance, 'name' => $name]);
            } else
            {
                return redirect()->route('resume.index');
            }
        }
        else {
            // return redirect()->route('resume.index');
            dd("vous n'etes pas un freelance,vous serez redirigé vers la page des jobs");
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
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $company = $request->company;
        $job_title = $request->job_title;
        $url = $request->url;
        $name_url = $request->name_url;
          $request->validate([
            'date'=> ['after_or_equal:date']
          ]);
            $request->validate
        ([

                    "start_date" => ['required','array'],
                    "start_date.*" => ['nullable','date','nullable'],
                    "end_date" => ['nullable','array'],
                    "end_date.*" => ['date','nullable','nullable','after_or_equal:start_date.*'],
                    "company" => ['required', 'array'],
                    "company.count.*" => ['nullable', 'string','nullable'],
                    "job_title" => ['required',  'array'],
                    "job_title.count.*" => ['nullable',  'string','nullable'],
                    "url" => ['required',  'array'],
                    "url.*" => [ 'url','nullable'],
                    "name_url" => ['required',  'array'],
                    "name_url.*" => [ 'nullable','string'],


            ]);

                for ($i = 0; $i < count($start_date) - 1; $i++)
                 {
                    $dataexp =
                    [
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


                toastr()->success('Profil is create with successful');


                    return back();


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
