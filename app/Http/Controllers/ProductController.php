<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductImages;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->with('product_images')->get();
        return view('adminpanel.product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('adminpanel.product.create',compact('categories'));
    }
    public function product()
    {
        return view('website.product');
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
        return view('website.product',compact('products','title','search'));
    }
    public function productDetail($product_title)
    {
        $title = str_replace('-', ' ', $product_title);
        $product     = Product::where('title',$title)->first();
        if($product){
            $category_id = $product->category_id;
            $related_products = Product::where('category_id',$category_id)->where('id','!=',$product->id)->take(12)->get();
            return view('website.product_detail',compact('product','related_products'));
        }else{
            return abort(404);
        }
    }
    public function productDetailRedirect($product_title)
    {
        $product     = Product::where('id',session()->get('detail_id'))->first();
       // dd($product);
        if($product){
            $category_id = $product->category_id;
            $related_products = Product::where('category_id',$category_id)->where('id','!=',session()->get('detail_id'))->take(12)->get();
            return view('website.product_detail',compact('product','related_products'));
        }else{
            return abort(404);
        }
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title'          => 'required',
            'category_id'    => 'required',
            'picture'        => 'required',
            'description'    => 'required',
            'picture'        => 'required',
            'other_picture'  => 'required',
        ]);
        $product = Product::create([
            'title'         => $request->title,
            'description'   => $request->description,
            'long_description' => $request->long_description,
            'category_id'   => $request->category_id,
            'is_active'     => $request->is_active,
            'in_menu'       => $request->in_menu,
        ]);

        if($product){
            if ($request->file('picture')) {
                $mainfilename = time().'-'.request()->picture->getClientOriginalName();
                request()->picture->move('uploads/products/', $mainfilename);
                
                $insert = DB::table('product_images')->insert([
                    'product_id'    => $product->id,
                    'picture'       => $mainfilename,
                    'main_picture'  => 1,
                ]);
            }else{
                $mainfilename = null;
            }
            if($request->hasfile('other_picture')){
                $i = 0;
                foreach($request->file('other_picture') as $file){
                    $name = time().$i.'-'.$file->getClientOriginalName();
                    $file->move('uploads/products/', $name);
        
                    $insert = DB::table('product_images')->insert([
                        'product_id'    => $product->id,
                        'picture'       => $name,
                    ]);

                    $i++;  
                }
            }
        }
        Session::flash('success','Product Created Successfully');
        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('adminpanel.product.edit', compact('categories','product'));
    }

    public function update(Request $request, Product $product)
    {
        $validate = $request->validate([
            'title'          => 'required',
            'category_id'    => 'required',
            'description'    => 'required',
        ]);
        if ($request->file('picture')) {
            $delete_image = ProductImages::where('product_id',$product->id)->where('main_picture',1)->first();
            $oldImageLoc = 'uploads/products/' . $delete_image->picture;
            File::delete($oldImageLoc);
            $delete_image->delete();

            $filename = time().'-'.request()->picture->getClientOriginalName();
            request()->picture->move('uploads/products/', $filename);
            
            $insert = DB::table('product_images')->insert([
                'product_id'    => $product->id,
                'picture'       => $filename,
                'main_picture'  => 1,
            ]);
        }
        if($request->hasfile('other_picture')){
            
            $delete_images = ProductImages::where('product_id',$product->id)->where('main_picture',0)->get();
            foreach($delete_images as $d_image){
                $oldImageLoc = 'uploads/products/' . $d_image->picture;
                File::delete($oldImageLoc);
                $d_image->delete();
            }

            $i = 0;
            foreach($request->file('other_picture') as $file){
                $name = time().$i.'-'.$file->getClientOriginalName();
                $file->move('uploads/products/', $name);
    
                $insert = DB::table('product_images')->insert([
                    'product_id'    => $product->id,
                    'picture'       => $name,
                ]);
                $i++;  
            }
        }
        $product = $product->update([
            'title'         => $request->title,
            'description'   => $request->description,
            'category_id'   => $request->category_id,
            'is_active'     => $request->is_active,
            'in_menu'       => $request->in_menu,
            'long_description' => $request->long_description,

        ]);
        Session::flash('success','Product Updated Successfully');
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product_images = ProductImages::where('product_id',$product->id)->get();
        foreach($product_images as $image){
            $oldImageLoc = 'uploads/products/' . $image->picture;
            File::delete($oldImageLoc);
            $image->delete();
        }
        $product->delete();
        Session::flash('success','Product Deleted Successfully');
        return redirect()->route('products.index');
    }
}
