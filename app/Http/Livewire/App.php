<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class App extends Component
{
    public $articles, $documents, $categories;

    public function render()
    {
        $categories_slides_data = Category::with('documents')->get();
        return view('livewire.app', [
            "articles" => $this->articles,
            "documents" => $this->documents,
            "categories" => $this->categories,
            "categories_slides"=>$categories_slides_data
        ]);
    }
}