<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Category extends Component
{
    public $productList = [
        'Fruit',
        'Vegetable',
        'Chocolate',
        'Egg',
        'Fish',
        'Chemical',
        'Dairy Product',
    ];
    public $category = [];
    public function render()
    {
        return view('livewire.category');
    }
}
