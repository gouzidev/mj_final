<?php

namespace App\Http\Livewire;


use Livewire\Component;

class SearchDocument extends Component
{
    public $query;
    public $results;
    public $categories_and_docs;

    public function render()
    {
        return view('livewire.search-document', ["categories_and_docs" => $this->categories_and_docs]);
    }
}