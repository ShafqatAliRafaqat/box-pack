<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'DESC')->get();
        return view('adminpanel.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('adminpanel.blog.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'title'          => 'required',
            'description'    => 'required',
            'picture'        => 'required',
        ]);
        $blog = Blog::create([
            'title'         => $request->title,
            'description'   => $request->description,
            'is_active'     => $request->is_active,
        ]);
        if($request->hasfile('picture')){
            $i = 0;
            foreach($request->file('picture') as $file){
                $name = time().$i.'-'.$file->getClientOriginalName();
                $file->move(public_path('uploads/blogs/'), $name);
    
                $insert = DB::table('blog_images')->insert([
                    'blog_id'    => $blog->id,
                    'picture'       => $name,
                ]);
                $i++;  
            }
        }
        Session::flash('success','Blog Created Successfully');
        return redirect()->route('blogs.index');
    }

    public function show(Blog $blog)
    {
        
    }

    public function edit(Blog $blog)
    {
        return view('adminpanel.blog.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validate = $request->validate([
            'title'          => 'required',
            'description'    => 'required',
        ]);
        if($request->hasfile('picture')){
            
            $delete_images = BlogImages::where('blog_id',$blog->id)->get();
            foreach($delete_images as $d_image){
                $oldImageLoc = public_path('uploads/blogs/' . $d_image->picture);
                File::delete($oldImageLoc);
                $d_image->delete();
            }
            $i = 0;
            foreach($request->file('picture') as $file){
                $name = time().$i.'-'.$file->getClientOriginalName();
                $file->move(public_path('uploads/blogs/'), $name);
    
                $insert = DB::table('blog_images')->insert([
                    'blog_id'    => $blog->id,
                    'picture'       => $name,
                ]);
                $i++;  
            }
        }
        $blog = $blog->update([
            'title'         => $request->title,
            'description'   => $request->description,
            'is_active'     => $request->is_active,
        ]);
        Session::flash('success','Blog Updated Successfully');
        return redirect()->route('blogs.index');
    }

    public function destroy(Blog $blog)
    {
        $blog_images = BlogImages::where('blog_id',$blog->id)->get();
        foreach($blog_images as $image){
            $oldImageLoc = public_path('uploads/blogs/' . $image->picture);
            File::delete($oldImageLoc);
            $image->delete();
        }
        $blog->delete();
        Session::flash('success','Blog Deleted Successfully');
        return redirect()->route('blogs.index');
    }
}
