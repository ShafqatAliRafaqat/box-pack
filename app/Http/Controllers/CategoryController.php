<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductImages;
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
    public function categories($slug = null)
    {
        $type = ($slug == 'box-by-industory')? 'Type1' :(($slug == 'box-by-style')? 'Type2' : (($slug == 'box-by-other')? 'Type3' : null) );
        if($slug != null){
            $categories = Category::where('type',$type)->where('is_active',1)->get();
        }else{
            $categories = Category::where('is_active',1)->get();
        }
        return view('website.category',compact('categories','type'));
    }
    public function categoryProducts( $category_type, $slug, $id)
    {
        $categorytype = $category_type;
        $category = Category::where('is_active',1)->where('id',$id)->first();
        $products = Product::where('category_id',$id)->where('is_active',1)->get();
        return view('website.product', compact('products','category','categorytype'));
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
        $products = Product::where('category_id',$category->id)->get();
        foreach($products as $product){
            $product_images = ProductImages::where('product_id',$product->id)->get();
            foreach($product_images as $image){
                $oldImageLoc = public_path('uploads/products/' . $image->picture);
                File::delete($oldImageLoc);
                $image->delete();
            }
            $product->delete();
        }
        if($category->picture){
            $oldImageLoc = public_path('uploads/categories/' . $category->picture);
            File::delete($oldImageLoc);
        }
        $category->delete();
        Session::flash('success','Category Deleted Successfully');
        return redirect()->route('category.index');
    }
}
