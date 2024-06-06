<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontPages;

//Route::get('/', function () {return view('test');});

Route::get('/', [FrontPages::class,'home'])->name('home');
Route::get('/portfolio-details', [FrontPages::class,'portfolio'])->name('portfolio-details');
Route::get('/blogs', [FrontPages::class,'blogs'])->name('blogs');
Route::get('/blogDetails', [FrontPages::class,'blogDetails'])->name('blogDetails');

// Route::fallback([FrontPages::class,'err404']);
Route::get('/error404', [FrontPages::class,'err404'])->name('error404');
Route::get('/contact', [FrontPages::class,'contact'])->name('contact');

Route::get('/services', [FrontPages::class,'services'])->name('services');
Route::get('/appointment',[FrontPages::class,'appointment'] )->name('appointment');