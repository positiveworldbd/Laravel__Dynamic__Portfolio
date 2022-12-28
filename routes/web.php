<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController;


Route::get('/', function () {
    return view('welcome');
});



// Group Controller

Route::controller(DemoController::class)->group(function(){
    Route::get('/about', 'Index');
    Route::get('/contact', 'contactMethod');
    Route::get('/blog', 'blogMethod');
});



