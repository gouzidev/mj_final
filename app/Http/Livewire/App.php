<?php

namespace App\Http\Livewire;

use Livewire\Component;

class App extends Component
{
    public $articles;
    public $documents;
    public $categories;
    public function render()
    {
        return view('livewire.app', [
            "articles" => $this->articles,
            "documents" => $this->documents,
            "categories" => $this->categories,
        ]);
    }
}