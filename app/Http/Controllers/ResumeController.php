<?php

namespace App\Http\Controllers;


use App\Models\Links;
use App\Models\Freelance;
use App\Models\Experience;
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
        if (Auth::user() && Auth::user()->userable_type === 'App\Models\Freelance') {
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

            return redirect()->route('job');
            dd("vous n'etes pas un freelance");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resume()
    {
       if(Auth::user() && Auth::user()->userable_type ==='App\Models\Freelance')
       {
            $freelance=Freelance::where('id',Auth::user()->userable_id )->first();
            $name=Auth::user()->name;
            if( $freelance)
            {
                $experi=Experience::where('freelance_id',$freelance->id)->get();
                return view('manage-resumes',['experiences'=>$experi,'freelance'=>$freelance,'name'=>$name]);
            }
            else
            {
               //    nothing
            }

       }
       else
       {

                 return redirect()->route('resume.index');
                 dd("vous n'etes pas un freelance");
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
        // $data=$request->all();
        // $data=array_filter($request->start_date);
        // // dd($data);
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $company = $request->company;
        $job_title = $request->job_title;
        $url = $request->url;
        $name_url = $request->name_url;
        // $validator = Validator::make($request->all(), [
            // `start_date[$i]` => ['date', 'required'],
            // `end_date[$i]` =>  ['date', 'required', 'after_or_equal:start_date'],
            // `photo` => ['required', 'min:2', 'string'],
            // `job_title[$i]` =>['required', 'min:2', 'string'],
            // `url[$i]` =>['url', 'required'],
            // `name_url[$i]` => ['string', 'required'],
        // ]);
        // $validator = Validator::make($request->all(), [
        //     'company.*' => ['required', 'min:6', 'string']   // required and email format validation
        // ],[
        //     "company.*.required"=>"Name field is required "
        // ]); //
        //  dd($request->all());,normalement je penses que ça devait fonctionner

        // J'ai egalement essayer de faire des tests avec ceci
        //  mais je ne trouve pas la solution
        $validator = Validator::make($request->all(), [
            "company"    => "required|array",//name=company[]  in front
            "company.*"  => "required|string|min:7",
            "url"    => "required|array",//name=url[]  in front
            "url.*"  => "required|url|min:7",
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
