<?php

use App\Http\Controllers\Account\IndexController;
use App\Http\Controllers\CacheController;
use App\Http\Controllers\Crud\GoalController;
use App\Http\Controllers\Crud\ProjectController;
use App\Http\Controllers\Crud\StepController;
use App\Http\Controllers\Crud\UserController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\RabbitMQController;
use App\Http\Controllers\SocialNetworksController;
use App\Http\Middleware\HasAdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['guest'])->group(function () {
    Route::get('redirect/{provider}', [SocialNetworksController::class, 'redirect'])->name('redirect');
    Route::get('callback/{provider}', [SocialNetworksController::class, 'callback'])->name('callback');
});

Route::middleware(['auth', HasAdminMiddleware::class])->group(function (){
    Route::get('/account', IndexController::class)
        ->name('account')
        ->withoutMiddleware(HasAdminMiddleware::class)->name('account');
    Route::get('/export', ExportController::class)->name('export');
    // Админка
    Route::prefix('admin')->group(function () {
        Route::resource('/users', UserController::class);
        Route::resource('/projects', ProjectController::class);
        Route::resource('/goals', GoalController::class);
        Route::resource('/steps', StepController::class);
    });
});

Route::get('cache', CacheController::class);


// Test rabbitMq

Route::get('rabbitmq', RabbitMqController::class);
