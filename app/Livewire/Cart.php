<?php

namespace App\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public $cart = [];

    protected $listeners = ['productAdded'];
    public function productAdded($product)
    {
        $this->cart[] = $product;
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
