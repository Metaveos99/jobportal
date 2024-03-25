<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogShowCase extends Component
{
    public function render()
    {
        $blogsection = Blog::latest()->limit(5)->get();

        $blogsectioncount = Blog::count();

        return view('livewire.blog-show-case',compact('blogsection','blogsectioncount'));
    }
}
