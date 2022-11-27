<?php

namespace App\Http\Controllers\authentification;

use Exception;
use App\Models\Job;
use App\Models\User;
use App\Models\Customer;
use App\Models\Freelance;
use App\Models\Experience;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

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
            'role_id' => ['required', 'exists:roles,id'],
        ]);
        // try {
        // 1. Recuperer le role
        if ((int) $request->role_id === 1) { //freelance
            $account = Freelance::create();
            $route = 'resume.manage';
        } else { //Customer
            $account = Customer::create();
            $route = 'job.index';
        }
        $user = $account->user()->create($request->only('name', 'email', 'password', 'role_id'));
        $user->slug = Str::slug($request->name) ;
        $user->save();
        event(new Registered($user));
        Auth::login($user);
        Toastr::success('You Have Successfully created your account :)', 'Success!!');
        return redirect()->route($route);
        // } catch (Exception $e) {
        // Toastr::Warning('Your Email is incorrect :)', 'Error!!');

        // return back();
        // }
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
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // if (Auth::attemptWhen(['email' => $request->email, 'password' => $request->password], function ($user) {
        //     return $user->isActive();
        // })) {
        //     $request->session()->regenerate();
        //     Toastr::success('Hello Dear ' . Auth::user()->name . ' :)', 'Success!!');
        //     if (Auth::user()->role_id === 1) {
        //         $experience = Auth::user()->userable->experiences()->get();
        //         // $experience = Experience::where('freelance_id', Auth::user()->userable_id)->get();
        //         return redirect()->route('resume.manage');
        //     } elseif (Auth::user()->role_id === 2) {
        //         // $job = Job::where('customer_id', Auth::user()->userable_id)->get();
        //         $job = Auth::user()->userable->jobs()->get();
        //         if (count($job) === 0) {
        //             return redirect()->route('job.index');
        //         } else {
        //             return redirect()->route('job.manage');
        //         }
        //     } else {
        //         return redirect()->route('welcome');
        //     }
        // }elseif (Auth::attemptWhen(['email' => $request->email, 'password' => $request->password], !function ($user) {
        //     return $user->isActive();
        // })){ Toastr::Info('Your account is disable, contact administrator ): ', 'Info!!');
        //     return back();
        // }else {
        //     Toastr::Warning('Invalid UserName /PassWord. :)', 'Error!!');
        // }

        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_active' => 1])) {
                $request->session()->regenerate();
                Toastr::success('Hello Dear '.Auth::user()->name.' :)', 'Success!!');
                if (Auth::user()->role_id === 1) {
                    $experience = Auth::user()->userable->experiences()->get();
                    // $experience = Experience::where('freelance_id', Auth::user()->userable_id)->get();
                    return redirect()->route('resume.manage');
                } elseif (Auth::user()->role_id === 2) {
                    // $job = Job::where('customer_id', Auth::user()->userable_id)->get();
                    $job = Auth::user()->userable->jobs()->get();
                    if (count($job) === 0) {
                        return redirect()->route('job.index');
                    } else {
                        return redirect()->route('job.manage');
                    }
                } else {
                    return redirect()->route('welcome');
                }
            } elseif (Hash::check($request->password, $user->password) && $user->is_active == 0) {
                Toastr::Info('Your account is disable, contact administrator ): ', 'Info!!');

                return back();
            } elseif (! Hash::check($request->password, $user->password) && $user->is_active == 1) {
                Toastr::Warning('Invalid UserName /PassWord. :)', 'Error!!');

                return back();
            }
        } else {
            Toastr::Warning('Invalid UserName /PassWord. :)', 'Error!!');

            return back();
        }
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        Toastr::Info('Your are disconnect :)', 'Info!!');

        return redirect()->route('login.view');
    }
}
