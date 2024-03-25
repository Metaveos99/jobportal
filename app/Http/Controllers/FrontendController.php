<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   function findjob() {
    return view('findjob');
   }

   function aboutus()  {
    return view('aboutus');
   }

   function blog() {
      $blog = Blog::latest()->paginate(10);

      $blogcount = Blog::count();

      return view('blog',compact('blog','blogcount'));
   }
   
   function blogdetails($id) {
      $blog = Blog::where('slug',$id)->first();

      if ($blog) {
         return view('blogdetails',compact('blog'));
      }else{
         return back();
      }

   }

   function blogcategory($id) {
      
      $blogcount = Blog::where('category',$id)->count();
      if ($blogcount) {
         $blog = Blog::where('category',$id)->paginate(10);
         return view('blogcategory',compact('blog','blogcount'));
      }else{
         return back();
      }

   }

   function blogsearch(Request $req)  {

      $blog = Blog::where('category','LIKE','%'.$req->input('query').'%')->orwhere('title','LIKE','%'.$req->input('query').'%')->paginate(10);

      $blogcount = Blog::where('category','LIKE','%'.$req->input('query')."%")->orwhere('title','LIKE','%'.$req->input('query')."%")->count();

      return view('blogsearch',compact('blog','blogcount'));

   }
   
   function contact() {
    return view('contact');
   }


   function recruiters() {
      return view('recruiters');
   }

}
