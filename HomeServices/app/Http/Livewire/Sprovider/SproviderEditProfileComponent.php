<?php

namespace App\Http\Livewire\Sprovider;

use App\Models\ServiceCategory;
use App\Models\ServiceProvider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class SproviderEditProfileComponent extends Component
{
    use WithFileUploads;

    public $service_provider_id;
    public $image;
    public $about;
    public $city;
    public $service_category_id;
    public $service_locations;
    public $newImage;

    public function mount()
    {
        $sprovider = ServiceProvider::where('user_id',Auth::user()->id)->first();
        $this->service_category_id = $sprovider->service_category_id;
        $this->image = $sprovider->image;
        $this->about = $sprovider->about;
        $this->city = $sprovider->city;
        $this->service_locations = $sprovider->service_locations;
        $this->service_provider_id = $sprovider->id;
    }

    public function updateProfile()
    {
        $sprovider = ServiceProvider::where('user_id',Auth::user()->id)->first();
        if($sprovider)
        {
            $imageName = Carbon::now()->timestamp. '.' .$this->newImage->extension();
            $this->newImage->storeAs('sproviders', $imageName);
            $this->image = $imageName;
        }

        $sprovider->about = $this->about;
        $sprovider->city = $this->city;
        $sprovider->service_category_id = $this->service_category_id;
        $sprovider->service_locations = $this->service_locations;
        $sprovider->save();
        session()->flash('message','Profile has been updated successfully!');
    }
    public function render()
    {
        $scategories = ServiceCategory::all();
        return view('livewire.sprovider.sprovider-edit-profile-component', ['scategories'=>$scategories])->layout('layouts.base');
    }
}
