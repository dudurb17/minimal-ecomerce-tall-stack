<?php

namespace App\Livewire;

use App\Models\Products;
use Livewire\Component;

class ProductListing extends Component
{

    public $products;
    public function mount($category_id, $current_product_id)
    {
        $this->products = Products::with('category')
            ->where([['category_id', $category_id], ['id', '!=', $current_product_id]])
            ->limit(4)
            ->get();
    }


    public function render()
    {
        return view('livewire.product-listing');
    }
}