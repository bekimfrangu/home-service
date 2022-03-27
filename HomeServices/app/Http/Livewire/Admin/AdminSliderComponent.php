<?php

namespace App\Http\Livewire\Admin;

use App\Models\Slider;
use Livewire\Component;
use Livewire\WithPagination;
class AdminSliderComponent extends Component
{
    use WithPagination;
    
    public function deleteSlide($id)
    {
        $slide = Slider::findorFail($id);
        unlink('images/slider/'.$slide->image);
        $slide->delete();
        session()->flash('message', 'Slide has been deleted successfully!');
    }
    public function render()
    {
        $slides = Slider::paginate(10);
        return view('livewire.admin.admin-slider-component', ['slides'=>$slides])->layout('layouts.base');
    }
}
