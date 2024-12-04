<?php

use App\Http\Controllers\Crud\UserController;
use App\Http\Middleware\HasAdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserController::class);
//    ->middleware(HasAdminMiddleware::class);
