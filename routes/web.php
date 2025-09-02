<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/hospedajes', function () {
    return view('hospedajes');
})->name('hospedajes');
