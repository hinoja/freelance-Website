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
    
    public function eCommerce()
    {
        return view('dashboard.views.eCommerce');
    }

    public function carDealer()
    {
        return view('dashboard.views.carDealer');
    }

    public function stockMarket()
    {
        return view('dashboard.views.stockMarket');
    }

    public function dating()
    {
        return view('dashboard.views.dating');
    }

    public function jobPortal()
    {
        return view('dashboard.views.jobPortal');
    }

    public function crm()
    {
        return view('dashboard.views.crm');
    }

    public function realEstate()
    {
        return view('dashboard.views.realEstate');
    }

    public function cryptoCurrency()
    {
        return view('dashboard.views.cryptoCurrency');
    }

    public function chat()
    {
        return view('dashboard.views.chat');
    }

    public function calenderList()
    {
        return view('dashboard.views.calenderList');
    }

    public function fullCalender()
    {
        return view('dashboard.views.fullCalender');
    }

    public function mail()
    {
        return view('dashboard.views.mail');
    }

    public function dataTable()
    {
        return view('dashboard.views.dataTable');
    }

    public function editableTable()
    {
        return view('dashboard.views.editableTable');
    }

    public function exportTable()
    {
        return view('dashboard.views.exportTable');
    }

    public function login()
    {
        return view('dashboard.views.login');
    }

    public function register()
    {
        return view('dashboard.views.register');
    }

    public function lockScreen()
    {
        return view('dashboard.views.lockScreen');
    }

}