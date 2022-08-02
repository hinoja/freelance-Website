<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

        public function connected()
        {
            return view('/connecté');
        }
        public function signup(Request $request)
        {
            $request->validate([
                'name' => ['required'],
                'email' => ['required', 'email','unique:users,email'],
                'password' => ['required'],


            ]);
            $user= new User();
            $user->email=$request->email;
            $user->first_name=$request->name;
            $user->password=Hash::make($request->password);
            $user->role_id=$request->role_id;
            $user->userable_id=1;
            $user->userable_type='name';



            $user->save();

             Auth::login($user, $remember = true);
               return redirect()->route('dashboard')->with('success',"Your account was been creted successfull");



        }


    public function authenticate(Request $request)
    {
                $credentials = $request->validate
                ([
                    'email' => ['required', 'email'],
                    'password' => ['required'],
                ]);

                if (Auth::attempt(['email'=> $request->email, 'password'=>$request->password,]))
                  {
                         $request->session()->regenerateToken();
                        //  return redirect()->intended('index');

                           return   view('index');

                 }

              return back()->withErrors(['failed' => 'Invalid UserName /PassWord.']);
     }

     public function logout()
     {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return view('disconnect');

     }

}
