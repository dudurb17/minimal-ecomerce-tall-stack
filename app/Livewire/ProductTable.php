<?php

namespace App\Livewire;

use App\Models\Products;
use Livewire\Component;
use Livewire\WithPagination;

class ProductTable extends Component
{
    use WithPagination;

    public $perPage = 5;
    public $sortBy = 'created_at';
    public $sortDir = 'DESC';

    public $search = '';

    public $currentUrl;

    public function setSortBy($sortColum)
    {
        if ($this->sortBy == $sortColum) {
            $this->sortDir = ($this->sortDir == 'ASC') ? "DESC" : 'ASC';
            return;
        }
        $this->sortBy = $sortColum;
        $this->sortDir = 'ASX';

    }

    public function delete($id)
    {
        $product = Products::find($id);
        $product->delete();

        return $this->redirect('/products', navigate: true);
    }

    public function render()
    {
        $current_url = url()->current();
        $explode_url = explode('/', $current_url);
        $this->currentUrl = $explode_url[3];
        return view('livewire.product-table', [
            'products' => Products::with('category')
                ->search($this->search)
                ->orderBy($this->sortBy, $this->sortDir)
                ->paginate($this->perPage)
        ]);
    }
}