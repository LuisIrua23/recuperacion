<?php
namespace App\Http\CategoryController;

use App\Http\Controllers\CategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('category/listar', [CategoryController::class, 'listar'])->name('category.listar');
Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('category/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::get('category/{category}', [CategoryController::class, 'show'])->name('category.show');
Route::put('category/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
