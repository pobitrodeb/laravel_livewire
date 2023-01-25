<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StudentLists extends Component
{
    // public $name;

    // public function mount($name)
    // {
    //     $this->name = $name;
    //     // dd($name);
    // }

    public function render()
    {
        return view('livewire.student-lists');
    }
}
