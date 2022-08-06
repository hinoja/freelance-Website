<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Customer;
use App\Models\Freelance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
        /**
         *       Retourne la vue apres connextion
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
            $request->validate
            ([
                'name' => ['required'],
                'email' => ['required', 'email','unique:users,email'],
                'password' => ['required','min:8'],
                'role_id'=> ['required','exists:users']
            ]);
            // 1. Recuperer le role
             if( (int)$request->role_id === 1)//freelance
            {
                $freelance = Freelance::create();
                $freelance->user()->create($request->only('name', 'email', 'password', 'role_id'));
            }
             else//Customer
            {
                $customer = Customer::create();
                $customer->user()->create($request->only('name', 'email', 'password', 'role_id'));
            }
            // dd('ggh');
            // $user=User::create($request->only('name', 'email', 'password', 'role_id'));
            // 2. Verifier le role (Customer role_id = 2 par exemple)
            // 2.1 Si le role === 2
            // $customer = Customer::create();
            // 2.2 Lier l'instance creee (Customer/Freelance) a l'utilisateur
            // $customer->user()->create($request->only('name', 'email', 'password', 'role_id'));
            // Mass assignment
            // $user = User::create($request->only('name', 'email', 'password', 'role_id'));
            // Le password sera hashe dans le model a travers le setter setPasswordAttribute
                // Auth::login($user);
            //  return view('index')->with('success',"Your account was been creted successfull");;
                return redirect()->route('dashboard');
         }


    public function authenticate(Request $request)
    {
        $request->validate
        ([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt(['email'=> $request->email, 'password'=>$request->password,]))
            {
                    $request->session()->regenerate();
                    return redirect()->intended('index');
                //    return   view('index');
            }
        return back()->withErrors(['failed' => 'Invalid UserName /PassWord.']);
    }

    public function logout()
    {
            Auth::logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();
            return redirect()->view('disconnect');
    }

}
