<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{
   public $message = "Dumy Content";
   public $submitForMessage = '';
    public function render()
    {
        return view('livewire.form');
    }
    public function onChange()
    {
        $this->message = 'Congratulations, your are click button';

    }

    public function submitForm(){
        $this->submitForMessage = 'Your are Form Submited';
    }
}
