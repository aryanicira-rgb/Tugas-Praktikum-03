<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/form', [DataController::class, 'form']);
Route::post('/proses', [DataController::class, 'proses']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, Ira'; 
});

Route::get('/user/{name}', function ($name) {
    return "Nama Saya $name";
});

Route::get('/greet/{name?}', function ($name = 'Guest') {
    return "Halo, $name";
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about', ['name' => 'Ira']);
});

Route::get('/home', function () {
    return 'Halo, Ini adalah halaman Home';
})->name('home.page');

Route::get('/lapor-banjir', [DataController::class, 'formBanjir']);
Route::post('/lapor-banjir/kirim', [DataController::class, 'kirimBanjir']);

Route::get('/banjir', [DataController::class, 'daftarBanjir'])->name('banjir.daftar');
Route::get('/banjir/form', [DataController::class, 'formBanjirBlade'])->name('banjir.form');
Route::post('/banjir/kirim', [DataController::class, 'kirimBanjirBlade'])->name('banjir.kirim');