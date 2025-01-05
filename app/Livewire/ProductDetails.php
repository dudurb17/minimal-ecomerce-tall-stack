<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Products;
use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Auth;

class ProductDetails extends Component
{
    public $product;

    public function mount(
        $product_id
    ) {
        $this->product = Products::find($product_id);

    }
    public function addToCart($productId)
    {
        $carItem = ShoppingCart::where('user_id', Auth::id())
            ->where('product_id', $productId)
            ->first();

        if ($carItem) {
            $carItem->quantity += 1;
            $carItem->save();
        } else {
            ShoppingCart::create([
                'user_id' => Auth::id(),
                'product_id' => $productId,
                'quantity' => 1
            ]);
        }
        $this->dispatch('cartUpdate');
    }
    public function render()
    {
        return view('livewire.product-details');
    }
}