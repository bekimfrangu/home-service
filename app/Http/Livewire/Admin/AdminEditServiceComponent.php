<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use App\Models\ServiceCategory;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class AdminEditServiceComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $tagline;
    public $service_category_id;
    public $price;
    public $discount;
    public $discount_type;
    public $thumbnail;
    public $image;
    public $description;
    public $inclusion;
    public $exclusion;
    public $featured;

    public $service_id;
    public $newThumbnail;
    public $newImage;

    public function mount($service_slug)
    {   
        $service = Service::where('slug', $service_slug)->first();

            $this->service_id = $service->id;
            $this->name = $service->name;
            $this->slug = $service->slug;
            $this->tagline = $service->tagline;
            $this->service_category_id = $service->service_category_id;
            $this->price = $service->price;
            $this->discount = $service->discount;
            $this->discount_type = $service->discount_type;
            $this->thumbnail = $service->thumbnail;
            $this->image = $service->image;
            $this->description = $service->description;
            $this->inclusion = str_replace("|","\n",$service->inclusion);
            $this->exclusion = str_replace("|","\n",$service->exclusion);
            $this->featured = $service->featured;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function updateService()
    {
        $this->validate([
            'name'=>'required',
            'slug'=>'required',
            'tagline'=>'required',
            'service_category_id'=>'required',
            'price'=>'required',
            'description'=>'required',
            'inclusion'=>'required',
            'exclusion'=>'required'
        ]);

        $service = Service::findorFail($this->service_id);

        $service->name = $this->name;
        $service->slug = $this->slug;
        $service->tagline = $this->tagline;
        $service->service_category_id = $this->service_category_id;
        $service->price = $this->price;
        $service->description = $this->description;
        $service->inclusion = str_replace("\n","|", trim($this->inclusion));
        $service->exclusion = str_replace("\n","|", trim($this->exclusion));
        $service->discount = $this->discount;
        $service->discount_type = $this->discount_type;
        $service->featured = $this->featured;

        if($this->newThumbnail)
        {
            unlink('images/services/thumbnails/'. $service->thumbnail);
            $imageName = Carbon::now()->timestamp. '.'. $this->newThumbnail->extension();
            $this->newThumbnail->storeAs('services/thumbnails', $imageName);
            $service->thumbnail = $imageName;
        }

        if($this->newImage)
        {
            unlink('images/services/'. $service->image);
            $imageName2 = Carbon::now()->timestamp. '.'. $this->newImage->extension();
            $this->newImage->storeAs('services', $imageName2);
            $service->image = $imageName2;
        }

        $service->save();
        session()->flash('message', 'Service has been updated successfully!');
    }
    public function render()
    {
        $categories = ServiceCategory::all();
        return view('livewire.admin.admin-edit-service-component', ['categories'=>$categories])->layout('layouts.base');
    }
}
