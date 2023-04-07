<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;

class CategoryName extends Component
{
    public $category;
    public $category_index;
    public $docs_count_per_cat;

    public function render()
    {
        return view('livewire.categories.category-name', [
            "category" => $this->category,
            "category_index" => $this->category_index,
            'docs_count_per_cat' => $this->docs_count_per_cat
        ]);
    }

    public function mount($data)
    {
        $this->category = $data['category'];
        $this->category_index = $data['category_index'];
        $this->docs_count_per_cat = $data['docs_count_per_cat'];
    }
}