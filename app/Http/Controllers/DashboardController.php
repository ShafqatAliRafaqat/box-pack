<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use App\Blog;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $total_categories = Category::count();
        $total_products = Product::count();
        $total_blogs = Blog::count();
        $total_quotes = DB::table('quote')->count();
        return view('adminpanel.home',compact('total_categories','total_products','total_blogs','total_quotes'));
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
