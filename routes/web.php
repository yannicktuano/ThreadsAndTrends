<?php
use App\Http\Controllers\ProductsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('cart', function () {
    return view('cart');
});
Route::get('wishlist', function () {
    return view('wishlist');
});
Route::get('product', function () {
    return view('product');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/product', function () {
        return view('product');
    })->name('product');
    Route::get('/cart', function () {
        return view('cart');
    })->name('cart');
    Route::get('/aboutus', function () {
        return view('aboutus');
    })->name('aboutus');    
});
Route::get('/manageproducts', [ProductsController::class, 'index'])->name('AllProducts');
Route::post('/manageproducts', [ProductsController::class, 'store'])->name('AllProducts');
Route::get('/manageproducts/delete/{id}', [ProductsController::class, 'Delete'])->name('delete.category');
Route::get('/editproducts/edit/{id}', [ProductsController::class, 'Edit']);
Route::post('/editProducts/update/{id}', [ProductsController::class, 'Update'])->name('update.category');