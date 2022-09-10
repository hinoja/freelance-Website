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
            $data = $request->only('name', 'email', 'password', 'role_id');
            // 1. Recuperer le role
            if ((int) $request->role_id === 1) {//freelance
                $freelance = Freelance::create();
                $user = $freelance->user()->create($data);
                $redirect = 'resume.manage';
            } else {//Customer
                $customer = Customer::create();
                $user = $customer->user()->create($data);
                $redirect = 'job.index';
            }
            
            event(new Registered($user));
            Auth::login($user);
            toastr()->success('Your account was been created successfully, Welcome' . $request->name);

            return redirect()->route($redirect);
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

            // On utilise la relation userable pour recuperer le type d'utilisateur connecte (freelance/customer)
            $userable = auth()->user()->userable;
            
            if (Auth::user()->role_id === 1) {
                // On peut a ce niveau juste verifier si la profession du freelance est vide ou une autre colonne de la table freelance
                if ($userable->profession) {
                    // Rediriger vers le dashboard freelance
                } else {
                    // Rediriger vers le formulaire ...
                }
                return redirect()->route('resume.manage');
            } elseif (Auth::user()->role_id === 2) {
                // $job = Job::where('customer_id', Auth::user()->userable_id)->get();

                // Utilisation de la relation jobs sur le customer

                if ($userable->jobs->isEmpty()) {
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
