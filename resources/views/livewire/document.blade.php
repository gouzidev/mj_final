<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DocumentsSlider extends Component
{
    public $image = "https://maktbah.net/wp-content/uploads/2020/06/%D8%A7%D9%84%D8%B1%D8%A4%D9%8A%D8%A9-%D8%A7%D9%84%D8%A7%D8%B3%D9%84%D8%A7%D9%85%D9%8A%D8%A9-%D9%84%D9%84%D9%82%D8%A7%D9%86%D9%88%D9%86-%D8%A7%D9%84%D8%AF%D9%88%D9%84%D9%8A-%D8%A7%D9%84%D8%B9%D8%A7%D9%85-%D9%82%D8%A7%D8%B3%D9%85-%D8%AE%D8%B6%D8%B1-Maktbah.net-4.jpg";
    public $image2 = "https://2.bp.blogspot.com/-FB3yGn0ffmM/UdhovtAq5oI/AAAAAAAANgw/dJ_7nEFgjiE/s1600/Dog-HD-Wallpaper-26.jpg";
    public $image3 = "https://altibrah.ae/img/covers/1455bd268808ab253bcb12bd.jpg";
    public function render()
    {
        return view('livewire.documents-slider', [
            "image" => $this->image,
            "image2" => $this->image2
        ]);
    }
}
