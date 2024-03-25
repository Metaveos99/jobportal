<?php

namespace App\Livewire;

use App\Models\EmailSubscription;
use Livewire\Component;

class Subscription extends Component
{
    public $email='';

    public function save() {
        
        $validated = $this->validate([
            'email' => ['required','email','unique:emailsubscriptions,email']
        ]);

        EmailSubscription::create($validated);

        $this->reset();

        return back()->with('Success','Your Are Successfullty Subscribed');

    }

    public function render()
    {
        return view('livewire.subscription');
    }
}
