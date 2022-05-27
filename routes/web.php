<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Manager\{TransportController, ReviewController};
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Models\Review;

Route::get('/', function () {
    
    $reviews = Review::all();
    return view('welcome', compact('reviews'));
});

Route::post('/contact',[ContactController::class,'store'])->name('contact.store');

// require __DIR__.'/auth.php';
