<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DocumentSlider extends Component
{
    public $image = "https://altibrah.ae/img/covers/1455bd268808ab253bcb12bd.jpg";
    public $image2 = "https://altibrah.ae/img/covers/1455bd268808ab253bcb12bd.jpg";
    public $image3 = "https://altibrah.ae/img/covers/1455bd268808ab253bcb12bd.jpg";
    public function render()
    
    {
        return view('livewire.document-slider');
    }
}
