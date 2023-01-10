<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dumyconent extends Component
{
    public function render()
    {
        $data = [
            'name' => 'Pobitrodebnath',
            'email' => 'pobitrodn@gmail.com',
            'webiste' => 'www.pobitrodeb.com'
        ];
        return view('livewire.dumyconent', ['data' => $data]);
    }
}
