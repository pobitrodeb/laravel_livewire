<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Students extends Component
{
    public $students = ['rajib', 'rahul', 'milon', 'rahaman'];

    public function render()
    {
        return view('livewire.students');
    }
}
