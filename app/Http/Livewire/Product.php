<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{
    public function render()
    {
        return <<<'blade'
            <div class="row">
            <div class="md-4">
            <div>
                <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
          </div>
            </div>
            </div>

        blade;
    }
}
