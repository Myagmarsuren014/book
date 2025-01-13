<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/daatgal')->group(function () {

    Route::get('/form', [PageController::class, 'daatgal_form'])->name('daatgal.form');
    Route::get('/next', [PageController::class, 'daatgal_next'])->name('daatgal.next');
    Route::get('/next2', [PageController::class, 'daatgal_next'])->name('daatgal.next2');
    Route::get('/purchase', [PageController::class, 'daatgal_purchase'])->name('daatgal.purchase');
    Route::get('/qpay', [PageController::class, 'daatgal_qpay'])->name('daatgal.qpay');
    Route::get('/verified', [PageController::class, 'daatgal_verified'])->name('daatgal.verified');
    Route::get('/option', [PageController::class, 'daatgal_option'])->name('daatgal.option');


});

Route::prefix('/admin')->group(function () {
    Route::get('/table', [PageController::class, 'admin_table'])->name('admin.table');
  
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
