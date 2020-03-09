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
            request()->picture->move('uploads/categories/', $filename);
        }else{
            $filename = null;
        }
        $category = Category::create([
            'title'         => $request->title,
            'picture'       => $filename,
            'description'   => $request->description,
            'type'          => $request->type,
            'is_active'     => $request->is_active,
            'position'      => $request->position,
            'in_menu'       => $request->in_menu,
        ]);
        Session::flash('success','Category Created Successfully');
        return redirect()->route('category.index');
    }

    public function LiveSearch(Request $request)
    {
        $search = $request->search;
        //var_dump($search);
        //$categories = DB::table('products')->where('title','like','%' . $search . '%')->get();
        $categories = DB::table('products')
            ->join('product_images', 'products.id', '=', 'product_images.product_id')
            ->where('products.title','like','%' . $search . '%')
            ->where('product_images.main_picture',1)
            ->select('products.*', 'product_images.picture as picture')
            ->limit(16)
            ->get();
        //dd($users);    
        // dd($categories);
        $title = "Search Results for: ".$search = $request->search;
        $search=true;
        return view('website.category',compact('categories','title','search'));
    }
    public function categories($slug = null)
    {
        $title = "Box By Industry";
        $categories = Category::where('is_active',1)->where('type','Type1')->get();
        return view('website.category',compact('categories','title'));
    }
    public function categoriesboxbystyle()
    {
        $category = Category::where('id',23)->where('is_active',1)->first();
        if($category){
            $title = "Box By Style";
            $products = Product::where('category_id',23)->where('is_active',1)->paginate(12);
            return view('website.product', compact('products','category','title'));
        }else{
            return abort(404);
        }
    }
    public function categoriesRetailBoxes()
    {
        $category = Category::where('id',19)->where('is_active',1)->first();
        if($category){
            $title = "Box By Style";
            $products = Product::where('category_id',19)->where('is_active',1)->paginate(12);
            return view('website.product', compact('products','category','title'));
        }else{
            return abort(404);
        }
    }
    public function categoryProducts( $slug)
    {
        $title = str_replace('-', ' ', $slug);
        $category = Category::where('is_active',1)->where('title',$title)->first();
        if($category){
            $products = Product::where('category_id',$category->id)->where('is_active',1)->paginate(12);
            return view('website.product', compact('products','category'));
        }else{
            return abort(404);
        }
    }
    public function categoryProductsRedirect($slug)
    {
         $category = Category::where('is_active',1)->where('id',session()->get('id'))->first();
        if($category){
            $products = Product::where('category_id',session()->get('id'))->where('is_active',1)->paginate(12);
            return view('website.product', compact('products','category'));
        }else{
            return abort(404);
        }
        
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
            $oldImageLoc = 'uploads/categories/' . $category->picture;
            File::delete($oldImageLoc);
            $filename = time().'-'.request()->picture->getClientOriginalName();
            request()->picture->move('uploads/categories/', $filename);
        }else{
            $filename = $category->picture;
        }
        $category = $category->update([
            'title'         => $request->title,
            'picture'       => $filename,
            'description'   => $request->description,
            'type'          => $request->type,
            'is_active'     => $request->is_active,
            'position'      => $request->position,
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
                $oldImageLoc = 'uploads/products/' . $image->picture;
                File::delete($oldImageLoc);
                $image->delete();
            }
            $product->delete();
        }
        if($category->picture){
            $oldImageLoc = 'uploads/categories/' . $category->picture;
            File::delete($oldImageLoc);
        }
        $category->delete();
        Session::flash('success','Category Deleted Successfully');
        return redirect()->route('category.index');
    }
}
