<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;

class CategoryCard extends Component
{
    public $document;
    public function render()
    {
        return view(
            'livewire.categories.category-card',
            ['document' => $this->document]
        );
    }
}