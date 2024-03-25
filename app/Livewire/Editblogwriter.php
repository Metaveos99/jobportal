<?php

namespace App\Livewire;

use App\Models\BlogWriter;
use Livewire\Attributes\On; 
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use Livewire\Component;

class Editblogwriter extends Component
{
    use WithFileUploads;
    public $eid, $name,$image,$description;

    #[On('writer-tobeedit')] 
    public function updatePostList($item)
    {
        $writer = BlogWriter::find($item);

        $this->eid = $writer->id;
        $this->name = $writer->name;
        $this->description = $writer->description;
        
    }

    public function save() {
        
        if ($this->image !=null) {

            $this->validate([
                'name'=> ['required','string','max:250', Rule::unique(BlogWriter::class)->ignore($this->eid)],
                'description'=>'required | string|max:550',
                'image'=>'required | mimes:png,jpg,jpeg|max:5550',
            ]);
    
            $img = $this->image->store('blogwriter','public');
    
            $blogwriter = BlogWriter::find($this->eid);
            $blogwriter->name = $this->name;
            $blogwriter->image = $img;
            $blogwriter->description = $this->description;
            $blogwriter->save();
            
        }else {
            
            $this->validate([
                'name'=> ['required','string','max:250', Rule::unique(BlogWriter::class)->ignore($this->eid)],
                'description'=>'required | string|max:550',
            ]);

            $blogwriter = BlogWriter::find($this->eid);
            $blogwriter->name = $this->name;
            $blogwriter->description = $this->description;
            $blogwriter->save();
        }


        if ($blogwriter) {
           $this->reset();
            $this->dispatch('writer-created');
           return back()->with('Success',"Writer Added Successfully");
        }


    }

    public function render()
    {
        return view('livewire.editblogwriter');
    }
}
