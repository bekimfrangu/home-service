<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;

    public function sendMessage()
    {
        $this->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'message'=>'required'
        ]);

        $contact = new Contact();
        $contact->name = $this->name;
        $contact->phone = $this->name;
        $contact->email = $this->email;
        $contact->message = $this->message;

        $contact->save();
        session()->flash('message', 'Your message has been submited successfully!');
    }

    public function render()
    {
        return view('livewire.contact-component')->layout('layouts.base');
    }
}
