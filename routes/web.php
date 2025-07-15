<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('ecome.home   ');
})->name('shop.home.index');
