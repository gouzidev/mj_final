<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoriesNames extends Component
{
    public $categories;
    // public $categories = Category::get();
    public function render()
    {
        return view('livewire.categories.categories-names');
    }
    public function mount()
    {
        $this->categories = Category::get();
    }
}
