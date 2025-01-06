<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;

class ManageOrder extends Component
{
    protected $orders;
    public function mount()
    {
        $this->orders = Order::all();
        // dd($this->orders);

    }
    public function render()
    {
        return view('livewire.manage-order')->layout('admin-layout');
    }
}