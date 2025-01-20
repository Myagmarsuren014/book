<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/bookStore')->group(function () {

    Route::get('/home', [PageController::class, 'bookStore_home'])->name('bookStore.home');
    Route::get('/buySection', [PageController::class, 'bookStore_buySection'])->name('bookStore.buySection');
    Route::get('/souvnerBuy', [PageController::class, 'bookStore_souvnerBuy'])->name('bookStore.souvnerBuy');

});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
