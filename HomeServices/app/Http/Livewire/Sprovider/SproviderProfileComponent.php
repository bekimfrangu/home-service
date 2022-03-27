<?php

namespace App\Http\Livewire\Sprovider;

use App\Models\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SproviderProfileComponent extends Component
{
    public function render()
    {
        $sprovider = ServiceProvider::where('user_id', Auth::user()->id)->first();
        return view('livewire.sprovider.sprovider-profile-component', ['sprovider'=>$sprovider])->layout('layouts.base');
    }
}
