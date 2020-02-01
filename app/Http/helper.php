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
function AllCategories(){
    $categories = Category::orderByDesc('updated_at')->select('title','id')->get();
    return $categories;
}
function product_image($product_id){
    $image = ProductImages::where('product_id',$product_id)->where('main_picture',1)->select('picture')->first();
    return $image;
}
function productAllImages($product_id){
    $image = ProductImages::where('product_id',$product_id)->orderBy('main_picture','DESC')->select('picture')->get();
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
function BlogMainImage($blog_id){
    $image = BlogImages::where('blog_id',$blog_id)->where('main_picture',1)->select('picture')->first();
    return $image;
}
function ShowBoxByIndustryInNav(){
    $data = Category::where('in_menu',1)->where('is_active',1)->where('type','Type1')->get();
    return $data;
}
function ShowBoxByStyleInNav(){
    $data = Category::where('in_menu',1)->where('is_active',1)->where('type','Type2')->get();
    return $data;
}
function ShowBoxByOtherInNav(){
    $data = Category::where('in_menu',1)->where('is_active',1)->where('type','Type3')->get();
    return $data;
}
function MainCategories(){
    $data = Category::where('is_active',1)->take(6)->get();
    return $data;
}
function BottomCategories(){
    $data = Category::where('is_active',1)->where('position',0)->take(9)->get();
    return $data;
}
function TopCategories(){
    $data = Category::where('is_active',1)->where('position',1)->take(6)->get();
    return $data;
}
function RelatedCategory($type,$id){
    $data = Category::where('type',$type)->where('id','!=',$id)->take(4)->get();
    return $data;
}
function Quote(){
    $data = DB::table('quote')->orderBy('created_at','Desc')->take(6)->get();
    return $data;
}
function ProductFaq(){
    $data = DB::table('contact_us')->orderBy('created_at','Desc')->take(6)->get();
    return $data;
}
?>
