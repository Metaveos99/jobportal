<?php

namespace App\Http\Controllers;

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
    return view('blog');
   }
   
   function contact() {
    return view('contact');
   }

}
