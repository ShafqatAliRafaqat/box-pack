<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();
        return view('adminpanel.category.index', compact('categories'));
    }

    public function create()
    {
        return view('adminpanel.category.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'title'          => 'required',
            'type'           => 'required',
            // 'picture'        => 'required',
        ]);
        if ($request->file('picture')) {
            $destinationPath = '/backend/uploads/categories/';                  // Defining th uploading path if not exist create new
            if(!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, $mode = 0777, true, true);
            }//     Uploading the Image to folder
            $image       = $request->file('picture');
            $filename    = time().'.'.$image->getClientOriginalExtension();
            $location    = public_path($destinationPath.$filename);
            Image::make($image)->save($location);
        }else{
            $filename = null;
        }
        $category = Category::create([
            'title'         => $request->title,
            'picture'       => $request->filename,
            'description'   => $request->description,
            'type'          => $request->type,
            'is_active'     => $request->is_active,
            'in_menu'       => $request->in_menu,
        ]);
        Session::flash('success','Category Created Successfully');
        return redirect()->route('category.index');
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('adminpanel.category.edit', compact('category'));
        
    }

    public function update(Request $request, Category $category)
    {
        dd($request->all());
    }

    public function destroy(Category $category)
    {
        //
    }
}
