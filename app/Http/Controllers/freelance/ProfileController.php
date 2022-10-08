<?php

namespace App\Http\Controllers\freelance;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Models\Freelance;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function store(ProfileRequest $request)
    {
        //  $freelance = Freelance::where('id', Auth::user()->userable_id)->first();
        $freelance = Auth::user()->userable;
        //  $user = Auth::user();
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        // $user->is_active = $request->status;
        //  $user->mail = $request->mail;  //a remettre
        $freelance->salaries = $request->salaries;
        //  $freelance->email = $request->email;//a remetttre
        $freelance->location = $request->location;
        $freelance->profession = $request->title;
        $freelance->description = $request->description;
        $freelance->save();
        $user->save();
        Toastr::success('You Have Successfully update your Profile :)', 'Success');

        return redirect()->route('welcome');
    }
}
