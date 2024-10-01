<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', function () {
    return '<h1>hello world</h1>';
});
Route::get('/index',[TestController::class,'index'])->name('index');



