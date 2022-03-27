<?php

namespace App\Http\Livewire\Admin;

use App\Models\Slider;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditSlideComponent extends Component
{
    use WithFileUploads;
    
    public $title;
    public $status;
    public $image;
    public $newImage;
    public $slide_id;
    
    public function mount($slide_id)
    {
        $slide = Slider::findorFail($slide_id);

        $this->slide_id = $slide->id;
        $this->title = $slide->title;
        $this->status = $slide->status;
        $this->image = $slide->image;

    }

    public function updateSlide()
    {
        $this->validate([
            'title'=>'required',
            'image'=>'required|mimes:jpeg,png'
        ]);

        $slide = Slider::findorFail($this->slide_id);
        $slide->title = $this->title;
        $slide->status = $this->status;

        if($this->newImage)
        {
                unlink('images/slider/'.$slide->image);
                $imageName = Carbon::now()->timestamp. '.'.$this->newImage->extension();
                $this->newImage->storeAs('slider', $imageName);
                $slide->image = $imageName;
        }

        $slide->save();
        session()->flash('message', 'Slide has been updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-slide-component')->layout('layouts.base');
    }
}
