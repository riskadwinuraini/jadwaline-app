<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Manager\{TransportController, ReviewController};
use App\Http\Controllers\AccountController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Models\Review;

Route::get('/', function () {
    
    $reviews = Review::all();
    return view('welcome', compact('reviews'));
});

// require __DIR__.'/auth.php';
