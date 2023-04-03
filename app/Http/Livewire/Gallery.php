<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Gallery extends Component
{
    public $articles;

    public function render()
    {

        return view('livewire.gallery',[
            "articles"=> $this->articles
        ]);
    }
}
