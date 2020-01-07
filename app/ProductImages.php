<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    protected $table = 'product_images';
    protected $guarded  = ['id'];
    public function product(){
        return $this->belongsTo('App\Product');
    }
    
}
