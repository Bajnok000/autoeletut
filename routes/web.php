<?php

use Illuminate\Support\Facades\Route;
use Http\App\Controllers\auto;
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
    return view('welcome');
});
Route::get('/auto', function () {
    return view('auto');
});
Route::post('/auto',[auto::class,"autoRogzites"]);

Route::get('/tulajdonosok', function () {
    return view('tulajdonosok');
});
Route::post('/tulajdonosok',[tulajdonos::class,"tulajRogzites"]);

Route::get('/balesetek', function () {
    return view('balesetek');
});
