<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Products;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddProductForm extends Component
{
    use WithFileUploads;

    public $currentUrl;
    #[Validate('image|max:1024')]
    public $product_name = '';

    public $photo = '';

    public $product_price = '';

    public $product_description = '';

    public $category_id;

    public $all_categories = [];

    public function mount()
    {
        $this->all_categories = Category::all();
    }

    public function save()
    {
        $this->validate([
            'product_name' => 'required',
            'photo' => 'required|mimes:jpg,png|max:1024',
            'product_price' => 'required|integer',
            'product_description' => 'required',
            'category_id' => 'required'
        ]);
        $path = $this->photo->store('photes');

        $product = new Products();
        $product->name = $this->product_name;
        $product->image = $path;
        $product->description = $this->product_description;
        $product->price = $this->product_price;
        $product->category_id = $this->category_id;
        $product->save();

        return $this->redirect('/products', navigate: true);

    }
    public function render()
    {
        $current_url = url()->current();
        $explode_url = explode('/', $current_url);

        $this->currentUrl = $explode_url[3] . ' ' . $explode_url[4];
        return view('livewire.add-product-form')->layout('admin-layout');
    }
}