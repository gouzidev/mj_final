<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = ["hello", "lol"];
        // $categories = Category::get();
        return view("welcome", compact("categories"));
    }
}
