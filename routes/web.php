<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ProfileController;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/')->group(function () {
    Route::get('/', ArticleController::class);
    Route::get('home', ArticleController::class);
});

Route::get("/documents", [DocumentController::class, "documents_view"])->name("documents");
Route::get("/articles", [ArticleController::class, "articles_view"])->name("articles");
Route::get("/categories", [CategoryController::class, "categories_view"])->name("categories");
Route::get("/category/{id}", [CategoryController::class, "show"])->name("category.show");
// Route::get("test", function () {
//     return view("category");
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';