<?php

namespace App\Http\Livewire;

use App\Models\ServiceCategory;
use Livewire\Component;

class ServiceCategoriesComponent extends Component
{
    public function render()
    {
        $scategories = ServiceCategory::all();
        return view('livewire.service-categories-component', ['scategories'=>$scategories])->layout('layouts.base');
    }
}
