<?php

use App\Http\Controllers\Crud\GoalController;
use App\Http\Controllers\Crud\ProjectController;
use App\Http\Controllers\Crud\StepController;
use App\Http\Controllers\Crud\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
//    $post = Post::find(1);
//    foreach ($post->tags as $tag) {
//        echo $tag->name . "<br>";
//    }

//    dd(\App\Models\User::query()->admin()->get());
});

Route::resource('/users', UserController::class);
Route::resource('/projects', ProjectController::class);
Route::resource('/goals', GoalController::class);
Route::resource('/steps', StepController::class);
//    ->middleware(HasAdminMiddleware::class);
