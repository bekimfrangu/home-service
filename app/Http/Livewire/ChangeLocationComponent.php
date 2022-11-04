<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChangeLocationComponent extends Component
{
    public $streetNumber;
    public $routes;
    public $city;
    public $state;
    public $country;
    public $zipcode;

    public function changeLocation()
    {
        session()->put('streetNumber', $this->streetNumber);
        session()->put('routes', $this->routes);
        session()->put('city', $this->city);
        session()->put('state', $this->state);
        session()->put('country', $this->country);
        session()->put('zipcode', $this->zipcode);
        session()->flash('message', 'Location has been changed!');

        $this->emitTo('location-component','refreshComponent');
        
    }
    public function render()
    {
        return view('livewire.change-location-component')->layout('layouts.base');
    }
}
