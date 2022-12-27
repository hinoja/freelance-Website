<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function dashboardHome()
    {
        return view('dashboard.welcome');
    }
    

    public function userTable()
    {
        return view('dashboard.views.userTable');
    }

    public function jobs()
    {
        return view('dashboard.views.jobs');
    }

}