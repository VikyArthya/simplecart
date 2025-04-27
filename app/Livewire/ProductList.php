<?php

namespace App\Livewire;

use Livewire\Component;

class ProductList extends Component
{
    public $products = [
        ['id' => 1, 'name' => 'Product 1', 'price' => 10],
        ['id' => 2, 'name' => 'Product 2', 'price' => 20],
        ['id' => 3, 'name' => 'Product 3', 'price' => 30],
    ];

    public function addToCart($id, $name, $price)
    {
        $this->dispatch('productAdded', ['id' => $id, 'name' => $name, 'price' => $price]);
    }


    public function render()
    {
        return view('livewire.product-list');
    }
}
