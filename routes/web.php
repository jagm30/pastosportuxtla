<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});
Route::get('/nosotros', function () {
    return view('about');
});
Route::get('/servicios', function () {
    return view('service');
});
Route::get('/contacto', function () {
    return view('contact');
});
Route::get('/servicio-sintetico', function () {
    return view('detail');
});
Route::get('/servicio-sonnoflex', function () {
    return view('detail3');
});
//Route::view('/welcome', 'welcome');
