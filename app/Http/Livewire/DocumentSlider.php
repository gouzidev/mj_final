<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DocumentSlider extends Component
{
    public $documents = [
        [
            "image"=>"https://pdfhost.io/api/preview/b81030b7-9ecd-45a7-b248-55ed5fc9fc88",
            "title"=>"Scanned Document | PDF Host"
        ],
    ];
    public function render()
    
    {
        return view('livewire.document-slider', ["documents"=>$this->documents]);
    }
}
