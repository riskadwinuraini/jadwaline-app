<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\{ScheduleController,ReviewController};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//API route for register new user
Route::post('/register', [AuthController::class, 'register'])->name('register');

//API route for login user
Route::post('/login', [AuthController::class, 'login'])->name('login');

//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });

    // Schedule
    Route::get('/schedule', [ScheduleController::class, "getDashboard"])->name('api.schedule');

    // Review
    Route::get('/review', [ReviewController::class, "getDashboard"])->name('api.review');


    // API route for logout user
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
