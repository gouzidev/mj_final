<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchDocument extends Component
{
    public $categories;
    public function render()
    {
        return view('livewire.search-document', ["categories" => $this->categories]);
    }
}