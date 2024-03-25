<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogsideCategory extends Component
{
    public function render()
    {
        $cats = Blog::distinct()->pluck('category');

        return view('livewire.blogside-category',compact('cats'));
    }
}
