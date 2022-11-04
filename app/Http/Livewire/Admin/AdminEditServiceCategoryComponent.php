<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceCategory;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminEditServiceCategoryComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $image;
    public $newImage;
    public $category_id;

    public $featured;
    public function mount($category_id)
    {
           $scategory = ServiceCategory::findorFail($category_id);
           $this->category_id = $scategory->id;
           $this->name = $scategory->name;
           $this->slug = $scategory->slug;
           $this->image = $scategory->image;
           $this->featured = $scategory->featured;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function updateServiceCategory()
    {
        $this->validate([
            'name'=>'required',
            'slug'=>'required'
        ]);
        
        if($this->image)
        {
            $this->validate([
                'newImage'=>'required|mimes:jpeg,png'
            ]);
        }
        $scategory = ServiceCategory::findorFail($this->category_id);
        $scategory->name = $this->name;
        $scategory->slug = $this->slug;
        $scategory->featured = $this->featured;

        if($this->newImage)
        {
            $imageName = Carbon::now()->timestamp. '.' .$this->newImage->extension();
            $this->newImage->storeAs('categories', $imageName);
            $scategory->image = $imageName;
        }

        $scategory->save();
        session()->flash('message', 'Category has been updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-service-category-component')->layout('layouts.base');
    }
}
