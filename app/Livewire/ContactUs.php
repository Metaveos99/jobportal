<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactUs extends Component
{
    public $name,$email,$number,$message,$company_name='';

    public function save() {
        
       $validated =  $this->validate([
            'name' => 'required | string | max:255',
            'email' => 'required | email ',
            'number' => 'required | numeric | digits_between:10,15',
            'company_name' => 'string | max:255',
            'message' => 'required | string | max:1025',

        ]);

        Contact::create($validated);

        $this->reset();

        return back()->with('Success',"Your Query Has Been Submitted Successfully");

    }

    public function render()
    {
        return view('livewire.contact-us');
    }
}
