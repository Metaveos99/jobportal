<?php

namespace App\Livewire;

use App\Models\Blogcategory;
use Livewire\Component;

class Addblogcategory extends Component
{
    public $name;

    public function save()  {
       

        $this->validate([
            'name'=>'required| string| max:250|unique:blogcategories'
        ]);

        $category = new Blogcategory;
        $category->name = $this->name;
        $category->save();

        $this->reset();

        $this->dispatch('category-created'); 

        return back()->with('Success',"Category Added Successfully");

    }

    public function render()
    {
        return view('livewire.addblogcategory');
    }
}
