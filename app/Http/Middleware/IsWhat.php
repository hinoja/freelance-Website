<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsWhat
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if (Auth::user()->role_id !== $role) {//freelance
            return redirect()->route('resume.manage');
        } elseif (Auth::user()->role_id !== $role) {//customer
            return redirect()->route('resume.manage');
        }else{
            abort(403);
        }

        // if ( $role !== 2) {//freelance
        //     return redirect()->route('resume.manage');
        // } elseif ($role !== 1) {//customer
        //     return redirect()->route('resume.manage');
        // }else{
        //     abort(403);
        // }
    }
}
