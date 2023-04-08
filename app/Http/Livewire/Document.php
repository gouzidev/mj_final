<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Document extends Component
{

    public $document;
    public function render()
    {
        return view('livewire.document', [
            "document" => $this->document,
        ]);
    }
}
