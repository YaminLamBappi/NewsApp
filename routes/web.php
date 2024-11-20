<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NewsController::class, 'public_view'])->name('PublicView');
Route::get('/news/{id}', [NewsController::class, 'public_single_view'])->name('posts.view.public');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/admin', [AdminController::class, 'index'])->name('AdminPanel');



Route::get('/category/list', [CategoryController::class, 'show'])->name('CategoryList');
Route::get('/add/category/form', [CategoryController::class, 'CategoryForm'])->name('AddCategoryPage');
Route::post('/add/category', [CategoryController::class, 'store'])->name('AddCategory');

Route::get('/add/category/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/add/category/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::get('/delete/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');




Route::get('/news', [NewsController::class, 'index'])->name('NewsList');
Route::get('/add/news', [NewsController::class, 'create'])->name('NewsForm');
Route::post('/add/news', [NewsController::class, 'store'])->name('AddNews');


Route::get('/show/news/{id}', [NewsController::class, 'show'])->name('posts.show');
Route::get('/edit/news/{id}', [NewsController::class, 'edit'])->name('posts.edit');
Route::post('/update/news/{id}', [NewsController::class, 'update'])->name('posts.update');
Route::get('/delete/news/{id}', [NewsController::class, 'destroy'])->name('posts.destroy');

Route::get('/like/news/{id}', [NewsController::class, 'like'])->name('posts.like');
Route::get('/view/news/{id}', [NewsController::class, 'view'])->name('posts.view');
Route::get('/active/news/{id}', [NewsController::class, 'active'])->name('posts.active');
Route::get('/inactive/news/{id}', [NewsController::class, 'inactive'])->name('posts.inactive');

