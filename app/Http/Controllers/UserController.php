<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Freelance;
use App\Models\Role;
use App\Models\User;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     *       Retourne la vue apres connextion
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function connected()
    {
        return view('welcome');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8'],
            'role_id' => ['required'],
        ]);
        try {
            // 1. Recuperer le role
            if ((int) $request->role_id === 1) {//freelance
                $freelance = Freelance::create();
                $user = $freelance->user()->create($request->only('name', 'email', 'password', 'role_id'));
            } else {//Customer
                $customer = Customer::create();
                $user = $customer->user()->create($request->only('name', 'email', 'password', 'role_id'));
            }
            event(new Registered($user));
            Auth::login($user);
        } catch (Exception $e) {
           toastr()->warning('Your Email is incorrect');
            return back();
        }
        // $user=User::create($request->only('name', 'email', 'password', 'role_id'));
        // 2. Verifier le role (Customer role_id = 2 par exemple)
        // 2.1 Si le role === 2
        // $customer = Customer::create();
        // 2.2 Lier l'instance creee (Customer/Freelance) a l'utilisateur
        // $customer->user()->create($request->only('name', 'email', 'password', 'role_id'));
        // Mass assignment
        // $user = User::create($request->only('name', 'email', 'password', 'role_id'));
        // Le password sera hashe dans le model a travers le setter setPasswordAttribute
        //  return view('index')-;
        // Toastr::success('compte cree avec succes','success');
        toastr()->success('Your account was been created successfully');
        return redirect()->route('index');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            toastr()->success('Your account was been created successfully');
            return redirect()->route('index');
        }
        toastr()->warning('Invalid UserName /PassWord.');
        return back();
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        toastr()->info('Your are disconnect!!');
        return redirect()->route('index') ;
    }
}
