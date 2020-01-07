<?php

use App\Category;
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
?>
