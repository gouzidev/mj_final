<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function __invoke()
    {
        $articles = Article::get();
        return view("welcome", compact($articles));
    }
}
