<?php

namespace App\Http\Controllers\freelance;

use App\Models\User;
use App\Models\Freelance;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileRequest;


class ProfileController extends Controller
{
      function store(ProfileRequest $request){

        $freelance=Freelance::where('id',Auth::user()->userable_id)->first();
        $user=User::find(Auth::user()->id);
        $user->name= $request->name;
        $user->is_active= $request->status;
        $freelance->location = $request->location;
        $freelance->profession = $request->title;
        $freelance->description = $request->description;
        $freelance->save();
        $user->save();
        Toastr::success('You Have Successfully update your Profile :)','Success');
        return redirect()->route('welcome');
    }
}
