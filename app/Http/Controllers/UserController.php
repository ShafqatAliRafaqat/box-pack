<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

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
    public function storeQuote(Request $request)
    {
        $validate = $request->validate([
            'name'            => 'required|string|max:255',
            'email'           => 'required|string|email|max:255|unique:users',
            'phone'           => 'required|string',
            'company_name'    => 'required|string',
            'width'           => 'required|string',
            'height'          => 'required|string',
            'length'          => 'required|string',
            'unit'            => 'sometimes|string',
            'color'           => 'sometimes|string',
            'quantity'        => 'required|string',
            'quantity1'       => 'sometimes|string',
            'quantity2'       => 'sometimes|string',
            'comment'         => 'required|string',
            'box_type'        => 'required',
            'file'            =>  'mimes:jpeg,jpg,png,gif,pdf,docx,doc,xlsx,xls,ai,cdr,txt',
        ]);
        if ($request->file('file')) {
            $filename = time().'-'.request()->file->getClientOriginalName();
            request()->file->move(public_path('uploads/quote/'), $filename);
        }else{
            $filename = null;
        }
        $file_type  =   request()->file->guessExtension();
        $type   =   null;
        switch ($file_type) {
            case "pdf":
                $type = "pdf";
                break; 
            case "txt":
                $type = "txt";
                break;
            case 'docx':
                $type = "docx";
                break;
            case 'doc':
                $type = "doc";
                break;
            case 'xlsx':
                $type = "xlsx";
                break;
            case 'xls':
                $type = "xls";
                break; 
            case 'ai':
                $type = "ai";
                break; 
            case 'cdr':
                $type = "cdr";
                break; 
            case ('jpeg' || 'jpg' || 'png'|| 'gif'):
                $type = "image";
                break;
        }
        $quotes = DB::table('quote')->insert([
            'name'            => $request->name,
            'email'           => $request->email,
            'phone'           => $request->phone,
            'company_name'    => $request->company_name,
            'width'           => $request->width,
            'height'          => $request->height,
            'length'          => $request->length,
            'unit'            => $request->unit,
            'box_type'        => $request->box_type,
            'file_type'       => $request->type,
            'color'           => $request->color,
            'quantity'        => $request->quantity,
            'quantity1'       => $request->quantity1,
            'quantity2'       => $request->quantity2,
            'comment'         => $request->comment,
            'file'            => $filename,
        ]);
        Session::flash('success','Your query has been sended successfully! We will contact you shortly');
        return redirect()->back();
    }
    public function deleteQuote($id)
    {
        $quotes = DB::table('quote')->where('id',$id)->first();
        $oldImageLoc = public_path('uploads/quote/' . $quotes->file);
        File::delete($oldImageLoc);
        $quotes = DB::table('quote')->where('id',$id)->delete();
        
        Session::flash('success','Quote Deleted Successfully');
        return redirect()->back();
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
    
    public function deleteContact($id)
    {
        $contact_us = DB::table('contact_us')->where('id',$id)->delete();
        Session::flash('success','Data Deleted Successfully');
        return redirect()->back();
    }
}
