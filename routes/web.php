<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SubmissionController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/hospedajes', function () {
    return view('hospedajes');
})->name('hospedajes');

Route::get('/formato-resumenes', function () {
    return view('formato-resumenes');
})->name('formato.resumenes');

// Rutas de autenticación
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rutas protegidas para submissions
Route::middleware('auth')->group(function () {
    Route::get('/envio-resumenes', [SubmissionController::class, 'create'])->name('envio.resumenes');
    Route::post('/envio-resumenes', [SubmissionController::class, 'store'])->name('submissions.store');
    Route::get('/mis-trabajos', [SubmissionController::class, 'index'])->name('submissions.index');
    Route::get('/trabajo/{submission}', [SubmissionController::class, 'show'])->name('submissions.show');
    Route::get('/trabajo/{submission}/download/{fileIndex}', [SubmissionController::class, 'downloadFile'])->name('submissions.download');
});
