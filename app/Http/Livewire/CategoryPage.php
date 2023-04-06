<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CategoryPage extends Component
{
    public $category;
    public function render()
    {
        return view('livewire.category-page');
    }
}