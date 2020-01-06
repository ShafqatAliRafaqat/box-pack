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
            'picture'        => 'required',
        ]);
        if ($request->file('picture')) {
            $filename = time().'-'.request()->picture->getClientOriginalName();
            request()->picture->move(public_path('uploads/categories/'), $filename);
        }else{
            $filename = null;
        }
        $category = Category::create([
            'title'         => $request->title,
            'picture'       => $filename,
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
        $validate = $request->validate([
            'title'          => 'required',
            'type'           => 'required',
        ]);
        if ($request->file('picture')) {
            $oldImageLoc = public_path('uploads/categories/' . $category->picture);
            File::delete($oldImageLoc);
            $filename = time().'-'.request()->picture->getClientOriginalName();
            request()->picture->move(public_path('uploads/categories/'), $filename);
        }else{
            $filename = $category->picture;
        }
        $category = $category->update([
            'title'         => $request->title,
            'picture'       => $filename,
            'description'   => $request->description,
            'type'          => $request->type,
            'is_active'     => $request->is_active,
            'in_menu'       => $request->in_menu,
        ]);
        Session::flash('success','Category Updated Successfully');
        return redirect()->route('category.index');
    }

    public function destroy(Category $category)
    {
        if($category->picture){
            $oldImageLoc = public_path('uploads/categories/' . $category->picture);
            File::delete($oldImageLoc);
        }
        $category->delete();
        Session::flash('success','Category Deleted Successfully');
        return redirect()->route('category.index');
    }
}
