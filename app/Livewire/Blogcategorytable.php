<?php

namespace App\Livewire;

use App\Models\Blogcategory;
use Livewire\Component;
use Livewire\Attributes\On; 

class Blogcategorytable extends Component
{
    public $catategory = [];


    #[On('category-created')] 
    public function updatePostList()
    {
        $this->catategory = Blogcategory::latest()->get();

        
    }

    #[On('category-delete')] 
    public function delete($item) {
       
        Blogcategory::find($item)->delete();

        $this->dispatch('category-created');

    }    

    public function render()
    {
        $cats= $this->catategory = Blogcategory::latest()->get();
        return view('livewire.blogcategorytable',compact('cats'));
    }
}
