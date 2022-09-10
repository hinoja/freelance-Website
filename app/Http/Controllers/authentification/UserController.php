<?php

namespace App\Http\Controllers\authentification;


use Exception;
use App\Models\Job;
use App\Models\Role;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Freelance;
use App\Models\Experience;
use Illuminate\Http\Request;
use Yoeunes\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
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
        try {
            // 1. Recuperer le role
            if ((int) $request->role_id === 1) {//freelance
                $account = Freelance::create();
                $route="resume.manage";
            } else {//Customer
                $account = Customer::create();
                $route="job.index";
                // $user = $customer->user()->create($request->only('name', 'email', 'password', 'role_id'));
                // event(new Registered($user));
                // Auth::login($user);
                // toastr()->success('Your account was been created successfully, Welcome'.$request->name);

                // return redirect()->route('job.index');
            }
                $user = $account->user()->create($request->only('name', 'email', 'password', 'role_id'));
                event(new Registered($user));
                Auth::login($user);
                toastr()->success('Your account was been created successfully, Welcome'.$request->name);
                return redirect()->route($route);




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
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            toastr()->success('Hello Dear '.Auth::user()->name);
            if (Auth::user()->role_id === 1) {
                //
                $experience = Experience::where('freelance_id', Auth::user()->userable_id)->get();
                return redirect()->route('resume.manage');
            } elseif (Auth::user()->role_id === 2) {
                $job = Job::where('customer_id', Auth::user()->userable_id)->get();

                if (count($job) === 0) {
                    return redirect()->route('job.index');
                } else {
                    return redirect()->route('job.manage');
                }
            } else {
                return redirect()->route('welcome');
            }
        } else {
            toastr()->warning('Invalid UserName /PassWord.');

            return back();
        }
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        // toastr()->info('Your are disconnect!!');
        return redirect()->route('login.view');
    }
}
