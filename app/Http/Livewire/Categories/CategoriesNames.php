<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;
use LiveWire\WithPagination;

class CategoriesNames extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.categories.categories-names', ["categories" => Category::get()]);
    }
}