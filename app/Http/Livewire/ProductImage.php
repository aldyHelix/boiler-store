<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductImage extends Component
{
    public $image;
    public $edit;

    public function render()
    {
        return view('livewire.product-image');
    }
}
