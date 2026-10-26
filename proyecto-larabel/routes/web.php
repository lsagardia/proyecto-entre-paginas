<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/libros', function () {
    return view('libros');
});
Route::get('/contacto', function () {
    return view('contacto');
});

