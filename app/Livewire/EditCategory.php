<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class EditCategory extends Component
{
    public $category_name = '';

    public $category;

    public function mount($id)
    {
        $this->category = Category::find($id);
        $this->category_name = $this->category->name;
    }

    public function update()
    {
        $this->validate([
            'category_name' => 'required',
        ]);

        $this->category->update([
            'name' => $this->category_name
        ]);

        return $this->redirect('/categories', navigate: true);


    }
    public function render()
    {
        return view('livewire.edit-category')->layout('admin-layout');
    }
}