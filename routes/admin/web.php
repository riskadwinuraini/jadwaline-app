<?php


use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\AccountManageController;
use App\Http\Controllers\Admin\Auth\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/',DashboardController::class)->name('dashboard');
    Route::get('/review', [ReviewController::class, 'index'])->name('review.index');
    
    
    Route::get('review/hapus/{id}', [ReviewController::class, 'reviewDelete'])->name('hapusreview');
    Route::get('/profile',[ProfileController::class,'index'])->name('profile.index');
    Route::put('update-Profile/{id}',[ProfileController::class,'update'])->name('update.profile');

    // Account Manager
    Route::prefix('account-manage')
            ->name('account.manage.')->group(function(){
                
                Route::resource('/manager', AccountManageController::class);
                Route::get('manager/hapus/{id}', [AccountManageController::class, 'hapusmanager'])->name('hapusmanager');
                // Route::get('/manager', [AccountManageController::class, 'getManager'])->name('manager');
                // Route::get('/manager',[AccountManageController::class, 'create']->name(''));

        Route::get('/supir', [AccountManageController::class, 'getDriver'])->name('driver');
    });
});

require __DIR__.'/auth.php';

