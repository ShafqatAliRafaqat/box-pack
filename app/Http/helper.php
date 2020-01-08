<?php

use App\BlogImages;
use App\Category;
use App\ProductImages;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Maatwebsite\Excel\Facades\Excel;
use Intervention\Image\Facades\Image;

function category_name($category_id){
    $category_name = Category::where('id',$category_id)->select('title')->first();
    return $category_name;
}
function product_image($product_id){
    $image = ProductImages::where('product_id',$product_id)->where('main_picture',1)->select('picture')->first();
    return $image;
}
function ProductOtherImages($product_id){
    $image = ProductImages::where('product_id',$product_id)->where('main_picture',0)->select('picture')->get();
    return $image;
}
function BlogImages($blog_id){
    $image = BlogImages::where('blog_id',$blog_id)->select('picture')->get();
    return $image;
}
?>
