<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogImages extends Model
{
    protected $table = 'blog_images';
    protected $guarded  = ['id'];
    public function blog(){
        return $this->belongsTo('App\Blog');
    }
}
