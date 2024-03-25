<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\EmailSubscription;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard()  {
        
        return view('admin.dashboard');

    }

    function queries() {
        
        $contacts = Contact::latest()->get();

        return view('admin.queries',compact('contacts'));

    }

    function newsletter() {
        
        $subscriber = EmailSubscription::latest()->get();
        return view('admin.newsletter',compact('subscriber'));

    }

}
