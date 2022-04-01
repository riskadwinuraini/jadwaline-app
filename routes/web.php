<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Manager\TransportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
Route::middleware(['auth'])->group(function(){
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::resource('/transport', TransportController::class);
});

require __DIR__.'/auth.php';
