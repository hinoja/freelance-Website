<?php

namespace App\Http\Controllers\freelance;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Models\Freelance;
use App\Models\Job;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    /**
     *this function is there to update profile's freelalnce
     */
    public function store(ProfileRequest $request)
    {
        //  $freelance = Freelance::where('id', Auth::user()->userable_id)->first();
        $freelance = Auth::user()->userable;
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        $freelance->salaries = $request->salaries;
        $freelance->email = $request->email;
        $freelance->location = $request->location;
        $freelance->profession = $request->title;
        $freelance->description = htmlspecialchars( trim($request->description)) ;
        $freelance->save();
        Toastr::success('You Have Successfully update your Profile :)', 'Success');

        return redirect()->route('resume.manage');
    }

    /**
     * display all freelances who apply to a job
     */
    public function index(Job $job)
    {
        return view('customer.list-profile', ['job' => $job]);
    }

    /**
     * display all freelances who apply to a job
     */
    public function show( User $user)
    {
        return view('freelance.resumeProfileCV', ['user' => $user]);
    }
}
