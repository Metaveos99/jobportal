<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Blogcategory;
use App\Models\BlogWriter;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BlogController extends Controller
{
    function adminblog() {
        
        $blogs = Blog::latest()->get();

        return view('admin.blogs',compact('blogs'));

    }

    function writeblog() {
        
        $writers = BlogWriter::get();
        $category = Blogcategory::get();

        return view('admin.writeblog',compact('writers','category'));

    }

    function managecategory() {
        
        return view('admin.category');
    }

    function managewriter() {
        
        return view('admin.writer');
    }

    function postblog(Request $req) {
        
        $req->validate([
            'title' => 'required | string | max:250 | unique:blogs,title',
            'slug' => 'required | string | max:250',
            'description' => 'required | string | max:250',
            'writer' => 'required ',
            'category' => 'required',
            'blogcover_image' => 'required | mimes:jpg,jpeg,png | max:8500',
            'blog' => 'required'
        ]);

        $img = $req->file('blogcover_image')->store('blog','public');
        $bl = str_replace('<img','<img class="img-fluid"',$req->blog);

        $blog = new Blog;
        $blog->title = $req->title;
        $blog->slug = $req->slug;
        $blog->description = $req->description;
        $blog->writer = $req->writer;
        $blog->category = $req->category;
        $blog->blogcover_image = $img;
        $blog->blog = $bl;
        $blog->save();

        if ($blog) {
            return redirect('adminblogs')->with('Success',"Blog Added Successfully");
        }else{
            return back()->with('Failed',"Something Went Wrong");
        }

    }

    function editblog($id) {
        
        $blog = Blog::find($id);

        if ($blog) {
            $writers = BlogWriter::get();
            $category = Blogcategory::get();
           return view('admin.editblog',compact('blog','writers','category'));
        }else {
            return back();
        }

    }


    function updateblog(Request $req) {
        
        $req->validate([
            'id'=>'required',
            'title' => ['required', 'string', 'max:250',Rule::unique(Blog::class,'title')->ignore($req->id)] ,
            'slug' => 'required | string | max:250',
            'description' => 'required | string | max:250',
            'writer' => 'required ',
            'category' => 'required',
            'blogcover_image' => 'mimes:jpg,jpeg,png | max:8500',
            'blog' => 'required'
        ]);

        if ($req->blogcover_image) {
            $img = $req->file('blogcover_image')->store('blog','public');
        }

        $bl = str_replace('<img','<img class="img-fluid"',$req->blog);

        $blog = Blog::find($req->id);
        $blog->title = $req->title;
        $blog->slug = $req->slug;
        $blog->description = $req->description;
        $blog->writer = $req->writer;
        $blog->category = $req->category;
        if ($req->blogcover_image) {
            $blog->blogcover_image = $img;
        }
        $blog->blog = $bl;
        $blog->save();

        if ($blog) {
            return redirect('adminblogs')->with('Success',"Blog Updated Successfully");
        }else{
            return back()->with('Failed',"Something Went Wrong");
        }

    }


    function deleteblog(Request $req) {
        
        $req->validate([
            'id'=>'required|exists:blogs,id'
        ]);

        $blog = Blog::find($req->id)->delete();

        if ($blog) {
            return redirect('adminblogs')->with('Success',"Blog Deleted Successfully");
        }else{
            return back()->with('Failed',"Something Went Wrong");
        }

    }


}
