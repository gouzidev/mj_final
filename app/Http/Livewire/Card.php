<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Card extends Component
{
    public $title;
    public $body;
    public $img="https://thumbs.dreamstime.com/b/text-file-icon-vector-illustration-78702391.jpg";
    public $link;
    

    public function render()
    {


        return view('livewire.card',[
            "title"=> $this->title,
            "body"=> $this->body,
            "img"=> $this->img,
            "link"=> "$this->link"
        ]);
    }
}
