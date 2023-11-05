<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
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
    return view('main');
});
Route::get('/contact',[ContactController::class, 'showContactForm']);
Route::get('/menu',[MenuController::class, 'index']);
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/thankyou', function () {
    return view('thankYou');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/NotReady', function () {
    return view('NotReady');
});
// Route for viewing the shopping cart
Route::get('/cart', [CartController::class, 'index'])->name('cart');

// Route for adding an item to the cart
Route::post('/cart/add', [CartController::class,'addToCart'])->name('cart.add')->middleware(['auth']);

// Route for updating the quantity of an item in the cart
Route::patch('/cart/update/{itemId}', [CartController::class,'updateCart'])->name('cart.update');

// Route for removing an item from the cart
Route::delete('/cart/remove/{itemId}', [CartController::class,'removeFromCart'])->name('cart.remove');


require __DIR__.'/auth.php';
