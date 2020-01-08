<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $guarded  = ['id'];
    public function blog_images()
    {
        return $this->hasMany('App\BlogImages','blog_id','id');
    }
}
