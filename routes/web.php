<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/hospedajes', function () {
    return view('hospedajes');
})->name('hospedajes');

Route::get('/formato-resumenes', function () {
    return view('formato-resumenes');
})->name('formato.resumenes');

Route::get('/envio-resumenes', function () {
    return view('envio-resumenes');
})->name('envio.resumenes');
