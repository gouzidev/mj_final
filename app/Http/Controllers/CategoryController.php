<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::get();

        return view("welcome", compact("categories"));
    }
    public function categories_view()
    {
        $categories = Category::with('documents')->get();

        return view("livewire.categories-page", compact("categories"));
    }
    public function show($id)
    {
        $documents = Category::find($id)->documents;
        return view("livewire.categories.category-page", ["documents" => $documents]);
    }
}