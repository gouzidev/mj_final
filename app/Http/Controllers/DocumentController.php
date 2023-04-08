<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Document;

$documents = Document::with('category:id,category_name')->get();

class DocumentController extends Controller
{
    public function __invoke()
    {
        $articles = Document::get();
        return view("welcome", compact("articles"));
    }
    public function documents_view()
    {
        $documents = Document::with('category:id,category_name')->get();
        return view("livewire.documents-page", compact("documents"));
    }
}
