<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return  redirect()->route('adminDashboard');
    }
    public function aboutUs()
    {
        return view('website.about_us');
    }
    public function contactUs()
    {
        return view('website.contact_us');
    }
    public function privatePolicy()
    {
        return view('website.private_policy');
    }
    public function termsOfUse()
    {
        return view('website.terms_of_use');
    }

}
