<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\BlogWriter;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Attributes\On; 

class BlogWritertable extends Component
{
    public $writers= [];


    #[On('writer-created')] 
    public function updatePostList()
    {
        $this->writers = BlogWriter::latest()->get();

        
    }

    #[On('writer-delete')] 
    public function delete($item) {

        try {
            DB::beginTransaction();

            BlogWriter::find($item)->delete();

            Blog::where('writer',$item)->delete();
    
            DB::commit();

            $this->dispatch('category-created');
            return back()->with("Success","Writer Deleted Successfully");
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with("Failed","Something Went Wrong");
            
        }
       
        

    } 


    public function render()
    {
        $writer = $this->writers = BlogWriter::latest()->get();

        return view('livewire.blog-writertable',compact('writer'));
    }
}
