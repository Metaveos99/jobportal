<?php

namespace App\Livewire;

use App\Models\BlogWriter;
use Livewire\WithFileUploads;
use Livewire\Component;

class Addblogwriter extends Component
{
    use WithFileUploads;

    public $name,$image,$description;

    public function save() {
        
        $this->validate([
            'name'=>'required | string|max:250|unique:blog_writers,name',
            'description'=>'required | string|max:550',
            'image'=>'required | mimes:png,jpg,jpeg|max:5550',
        ]);

        $img = $this->image->store('blogwriter','public');

        $blogwriter = new BlogWriter;
        $blogwriter->name = $this->name;
        $blogwriter->image = $img;
        $blogwriter->description = $this->description;
        $blogwriter->save();

        if ($blogwriter) {
           $this->reset();
            $this->dispatch('writer-created');
           return back()->with('Success',"Writer Added Successfully");
        }


    }

    public function render()
    {
        return view('livewire.addblogwriter');
    }
}
