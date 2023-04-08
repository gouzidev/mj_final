<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ArticleCard extends Component
{
    public $data;
    public function render()
    {
        return view('livewire.article-card',["data"=>$this->data]);
    }
}
