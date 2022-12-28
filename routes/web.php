<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController;


Route::get('/', function () {
    return view('welcome');
});



// DemoController
Route::controller(DemoController::class)->group(function(){
    Route::get('/about', 'Index')->name('about.page');
    Route::get('/blog', 'blogMethod')->name('blog.page');
    Route::get('/contact', 'contactMethod')->name('contact.page');
});



