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
            'category_id'   => $request->category_id,
            'is_active'     => $request->is_active,
            'in_menu'       => $request->in_menu,
        ]);

        if($product){
            if ($request->file('picture')) {
                $mainfilename = time().'-'.request()->picture->getClientOriginalName();
                request()->picture->move(public_path('uploads/products/'), $mainfilename);
                
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
                    $file->move(public_path('uploads/products/'), $name);
        
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
            $oldImageLoc = public_path('uploads/products/' . $delete_image->picture);
            File::delete($oldImageLoc);
            $delete_image->delete();

            $filename = time().'-'.request()->picture->getClientOriginalName();
            request()->picture->move(public_path('uploads/products/'), $filename);
            
            $insert = DB::table('product_images')->insert([
                'product_id'    => $product->id,
                'picture'       => $filename,
                'main_picture'  => 1,
            ]);
        }
        if($request->hasfile('other_picture')){
            
            $delete_images = ProductImages::where('product_id',$product->id)->where('main_picture',0)->get();
            foreach($delete_images as $d_image){
                $oldImageLoc = public_path('uploads/products/' . $d_image->picture);
                File::delete($oldImageLoc);
                $d_image->delete();
            }

            $i = 0;
            foreach($request->file('other_picture') as $file){
                $name = time().$i.'-'.$file->getClientOriginalName();
                $file->move(public_path('uploads/products/'), $name);
    
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
        ]);
        Session::flash('success','Product Updated Successfully');
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product_images = ProductImages::where('product_id',$product->id)->get();
        foreach($product_images as $image){
            $oldImageLoc = public_path('uploads/products/' . $image->picture);
            File::delete($oldImageLoc);
            $image->delete();
        }
        $product->delete();
        Session::flash('success','Product Deleted Successfully');
        return redirect()->route('products.index');
    }
}
