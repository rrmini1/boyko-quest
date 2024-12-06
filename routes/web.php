<?php

use App\Http\Controllers\Crud\UserController;
use App\Http\Middleware\HasAdminMiddleware;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $table = \Illuminate\Support\Facades\DB::table('users');
    $model = User::query();
    dd($model->get());
});

Route::resource('users', UserController::class);
//    ->middleware(HasAdminMiddleware::class);
