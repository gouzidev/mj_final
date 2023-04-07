<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Document;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $articles = Article::get();
        $categories = Category::get();
        $documents = Document::get();

        return view("welcome", compact("articles", "categories", "documents"));
    }
}