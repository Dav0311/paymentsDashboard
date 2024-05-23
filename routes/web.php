<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('frontend.home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', [TemplateController::class, 'index'])->name('frontend.home');
// Route::resource('/transaction', TransactionController::class);
Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction.index');
Route::get('/create_transaction', [TransactionController::class, 'create'])->name('transaction.create');
Route::get('/show_transaction/{id}', [TransactionController::class, 'show'])->name('transaction.show');
Route::get('/edit_transaction/{id}', [TransactionController::class, 'edit'])->name('transaction.edit');
Route::post('/store_transaction', [TransactionController::class, 'store'])->name('store');
Route::post('/update_transaction/{$id}', [TransactionController::class, 'update'])->name('transaction.update');
Route::delete('/delete_transaction/{transaction}', [TransactionController::class, 'destroy'])->name('transaction.delete');



require __DIR__.'/auth.php';
