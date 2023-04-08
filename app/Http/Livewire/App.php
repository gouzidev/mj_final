<?php

namespace App\Http\Livewire;

use Livewire\Component;

class App extends Component
{
    public $articles;
    public $documents;
    public $categories_and_docs;
    public function render()
    {
        return view('livewire.app', [
            "articles" => $this->articles,
            "documents" => $this->documents,
            "categories" => $this->categories_and_docs,
        ]);
    }
}