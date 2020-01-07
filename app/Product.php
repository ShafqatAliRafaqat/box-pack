<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded  = ['id'];
    public function product_images()
    {
        return $this->hasMany('App\ProductImages','product_id','id');
    }
}
