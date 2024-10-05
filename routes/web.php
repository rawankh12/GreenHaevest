<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProductController;

Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::post('/signup', [RegisteredUserController::class, 'store']);


Route::middleware(['auth'])->group(function () {

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});


// Route::get('/', function () {
//     return redirect()->route('home');
// });

Route::get('/home', [ProductController::class, 'index'])->name('home');
// Route::get('home', function () {
//     return view('home');
// })->name('home');
Route::get('product', function () {
    return view('Product');
})->name('product');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('neture_perks', function () {
    return view('neture_perks');
})->name('neture_perks');

Route::get('neture_gift', function () {
    return view('neture_gift');
})->name('neture_gift');

Route::get('contact', function () {
    return view('contact');
})->name('contact');
