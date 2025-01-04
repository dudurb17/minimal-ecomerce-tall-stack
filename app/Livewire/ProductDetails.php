<?php

namespace App\Livewire;

use App\Models\Products;
use Livewire\Component;

class ProductDetails extends Component
{
    public $product;

    public function mount(
        $product_id
    ) {
        $this->product = Products::find($product_id);

    }
    public function render()
    {
        return view('livewire.product-details');
    }
}