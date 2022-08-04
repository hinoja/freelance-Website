<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

        /**
         * Retourne la vue apres connextion
         *
         * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
         *
         */
        public function connected()
        {
            return view('index');
        }

        public function signup(Request $request)
        {
            $request->validate([
                'name' => ['required'],
                'email' => ['required', 'email','unique:users,email'],

                'password' => ['required','min:8'],
                'passwordConfirmed' => ['required'],
                'Role_id'=> ['required'],
            ]);
            // 1. Recuperer le role

            // 2. Verifier le role (Customer role_id = 2 par exemple)
            // 2.1 Si le role === 2
            // $customer = Customer::create();
            // 2.2 Lier l'instance creee (Customer/Freelance) a l'utilisateur
            // $customer->user()->create($request->only('name', 'email', 'password', 'role_id'));

            // Mass assignment
            // $user = User::create($request->only('name', 'email', 'password', 'role_id'));
            // Le password sera hashe dans le model a travers le setter setPasswordAttribute

            $user= new User();
            $user->email=$request->email;
            $user->first_name=$request->name;
            $user->password=Hash::make($request->password);
            $user->role_id=$request->Role_id;
            $user->userable_id=2;
            $user->userable_type="App\Models\Freelance";
            $user->save();
             Auth::login($user);

             return view('index')->with('success',"Your account was been creted successfull");;
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
                         $request->session()->regenerate();
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
        return redirect()->view('disconnect');

     }

}
