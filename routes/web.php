<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Route::get('products',[ProductController::class,'index'])->name('products.index');
// Route::post('products',[ProductController::class,'store'])->name('products.store');
// Route::get('products/{product}',[ProductController::class,'show'])->name('products.show');
// Route::get('products/create',[ProductController::class,'create'])->name('products.create');
// Route::put('products/{id}',[ProductController::class,'update'])->name('products.update');
// Route::delete('products/{id}',[ProductController::class,'destroy'])->name('products.destroy');

Route::resource('products',ProductController::class);

Route::get('carts',[ProductController::class,'carts'])->name('products.carts');
Route::get('orders',[OrderController::class,'index'])->name('orders.index');