<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->with('product_images')->get();
        return view('adminpanel.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('adminpanel.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        return redirect()->route('products  .index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
