<?php

namespace App\Http\Livewire\Sprovider;

use Livewire\Component;

class SproviderDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.sprovider.sprovider-dashboard-component')->layout('layouts.base');
    }
}
