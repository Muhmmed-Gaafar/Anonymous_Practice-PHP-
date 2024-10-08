<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Mail\DemoMail;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', function () {
    return '<h1>hello world</h1>';
});
Route::get('/index','ExampleController@index')->name('index');

Route::controller(ExampleController::class)->group(function () {
    Route::get('/test', 'test');
});






