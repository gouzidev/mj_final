<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Document extends Component
{

    public $document;
    public $category_name;
    public function render()
    {
        return view('livewire.document', [
            "document" => $this->document,
            "category_name" => $this->category_name,
        ]);
    }
}
