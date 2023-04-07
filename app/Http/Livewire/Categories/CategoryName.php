<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;

class CategoryName extends Component
{
    public $category;
    public $category_index;
    public function render()
    {
        return view('livewire.categories.category-name', [
            "category" => $this->category,
            "category_index" => $this->category_index
        ]);
    }
}