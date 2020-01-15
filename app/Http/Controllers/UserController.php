<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at', 'DESC')->get();
        return view('adminpanel.users.index', compact('users'));
    }

    public function create()
    {
        return view('adminpanel.users.create');
    }
    public function quote()
    {
        return view('website.quote');
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name'            => 'required|string|max:255',
            'email'           => 'required|string|email|max:255|unique:users',
            'password'        => 'required|string|min:6|confirmed',
        ]);
        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
        ]);
        Session::flash('success','User Created Successfully');
        return redirect()->route('users.index');
    }
    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        return view('adminpanel.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name'            => 'required|string|max:255',
            'email'           => 'required|string|email|max:255|unique:users',$id,
            'password'        => 'required|string|min:6|confirmed',
        ]);
        $user = User::where('id',$id)->update([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
        ]);
        Session::flash('success','User Updated Successfully');
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $delete_user = $user->delete();
        Session::flash('success','User Deleted Successfully');
        return redirect()->route('users.index');
    }
    public function allQuote()
    {
        $quotes = DB::table('quote')->orderBy('updated_at','DESC')->get();
        return view('adminpanel.quote.index', compact('quotes'));
    }
    public function contacts()
    {
        $contacts = DB::table('contact_us')->where('box_type',null)->get();
        return view('adminpanel.contact.index', compact('contacts'));
    }
    public function productFaq()
    {
        $productfaqs = DB::table('contact_us')->where('box_type','!=',null)->get();
        return view('adminpanel.contact.product_faq', compact('productfaqs'));
    }
    public function deleteQuote($id)
    {
        $quotes = DB::table('quote')->where('id',$id)->delete();
        Session::flash('success','Quote Deleted Successfully');
        return redirect()->back();
    }
    public function deleteContact($id)
    {
        $contact_us = DB::table('contact_us')->where('id',$id)->delete();
        Session::flash('success','Data Deleted Successfully');
        return redirect()->back();
    }
}
