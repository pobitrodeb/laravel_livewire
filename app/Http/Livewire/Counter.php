<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $value = 0;

    public function increment()
    {
        $this->value++;
    }

    public function decreement()
    {
        $this->value--;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
