<?php

use App\Http\Controllers\frontControlle;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// route::get('/front',function(){
// return view('index');
// });
route::get('/index', [frontControlle::class, 'index'])->name('front.index');
route::get('/contact', [frontControlle::class, 'contact'])->name('front.contact');
route::get('/About', [frontControlle::class, 'About_us'])->name('front.About');
route::get('/A', [frontControlle::class, 'A'])->name('front.About');