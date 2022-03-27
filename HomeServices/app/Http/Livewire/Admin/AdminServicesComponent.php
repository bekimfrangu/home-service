<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class AdminServicesComponent extends Component
{
    use WithPagination;
    
    public function deleteService($id)
    {
        $service = Service::findorFail($id);
        if($service->thumbnail)
        {
            unlink('images/services/thumbnails/'.$service->thumbnail);
        }
        if($service->image)
        {
            unlink('images/services/'.$service->image);
        }
        $service->delete();
        session()->flash('message', 'Service has been deleted successfully!');
    }

    public function render()
    {
        $services = Service::paginate(10);
        return view('livewire.admin.admin-services-component', ['services'=>$services])->layout('layouts.base');
    }
}
