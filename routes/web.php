<?php

use App\Http\Controllers\Account\IndexController;
use App\Http\Controllers\Crud\GoalController;
use App\Http\Controllers\Crud\ProjectController;
use App\Http\Controllers\Crud\StepController;
use App\Http\Controllers\Crud\UserController;
use App\Http\Middleware\HasAdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', HasAdminMiddleware::class])->group(function (){
    Route::get('/account', IndexController::class)
        ->name('account')
        ->withoutMiddleware(HasAdminMiddleware::class);
    // Админка
    Route::prefix('admin')->group(function () {
        Route::resource('/users', UserController::class);
        Route::resource('/projects', ProjectController::class);
        Route::resource('/goals', GoalController::class);
        Route::resource('/steps', StepController::class);
    });
});
