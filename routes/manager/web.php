<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Manager\{TransportController, ReviewController};
use App\Http\Controllers\AccountController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;


Route::middleware(['auth','role:user'])->group(function(){
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/transport', TransportController::class);
    Route::get('/review', [ReviewController::class, 'index'])->name('review.index');
    // Route::get('/history', [HistoryController::class, 'index'])->name('history.index')
    Route::delete('/review/{review:id}', [ReviewController::class, 'destroy'])->name('review.destroy');
    Route::get('/profile',[UserController::class,'profile']);
    Route::put('update-Profile/{users:id}',[UserController::class,'update'])->name('update.profile');
    Route::get('/akun', [AccountController::class, 'index'])->name('account.index');
});

require __DIR__.'/auth.php';
