<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('adminpanel.home');
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
