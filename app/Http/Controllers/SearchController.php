<?php

namespace App\Http\Controllers;
use App\Models\Document;
use App\Models\Article;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function documents(Request $req){
        $results = Document::where('title', 'like', '%' . $req->query("query") . '%')->get();

        return view('livewire.results',[
            "search_heading"=>$req->query("query"),
            "data"=>$results,
            "spec"=>"documents"
        ]);
    }

    public function articles(Request $req){
        $results = Article::where('title', 'like', '%' . $req->query("query") . '%')->get();

        return view('livewire.results',[
            "search_heading"=>$req->query("query"),
            "data"=>$results,
            "spec"=>"articles"
        ]);
    }
}
