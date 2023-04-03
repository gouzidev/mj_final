<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Article extends Component
{


    public $data;

    public function render()
    {
        return view('livewire.article',["data"=>$this->data]);
    }
}
