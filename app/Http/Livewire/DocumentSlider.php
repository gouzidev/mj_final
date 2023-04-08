<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DocumentSlider extends Component
{
    // public $documents = [
    //     [
    //         "image"=>"https://pdfhost.io/api/preview/b81030b7-9ecd-45a7-b248-55ed5fc9fc88",
    //         "title"=>"Scanned Document | PDF Host"
    //     ],
    //     [
    //         "image"=>"https://www.docdroid.net/thumbnail/GsUhp2h/1500,1500/sample-pdf.jpg",
    //         "title"=>"This component can be used to show the timline of a user’s"
    //     ],
    //     [
    //         "image"=>"https://www.docdroid.net/file/view/zxGxmUg/document791-pdf.jpg",
    //         "title"=>"This component can be used to"
    //     ],
    // ];
    public $documents;
    public $category;
    public $key;
    public function render()
    {
        return view('livewire.document-slider', [
            "category" => $this->category,
            "documents" => $this->category->documents,
            "key" => $this->key
        ]);
    }
}
