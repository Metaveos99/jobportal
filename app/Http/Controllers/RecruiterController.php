<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruiterController extends Controller
{
    function dashboard() {
        return view('rec.dashboard');
    }

    function postjob() {
        
        return view('rec.postjob');

    }
}
