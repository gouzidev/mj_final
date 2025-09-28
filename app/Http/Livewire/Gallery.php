<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class Gallery extends Component
{
    public $articles;

    public function render()
    {

        // return view('livewire.gallery', [
        //     "articles" => $this->articles
        // ]);
        return view('livewire.gallery');
    }
    public function mount()
    {
        $this->articles = Article::get();
    }
}
