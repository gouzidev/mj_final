<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Document extends Component
{

    public $data;
    public function render()
    {
        return view('livewire.document', ["data"=>$this->data]);
    }
}
