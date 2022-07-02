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
    return view('home');
})->name('home');

Route::get('/gendergelijkheid', function () {
    return view('gendergelijkheid');
})->name('gendergelijkheid');

Route::get('/geenarmoede', function () {
    return view('geenarmoede');
})->name('geenarmoede');

Route::get('/geenhonger', function () {
    return view('geenhonger');
})->name('geenhonger');

Route::get('/goedegezondheid', function () {
    return view('goedegezondheid');
})->name('goedegezondheid');

Route::get('/kwaliteitsonderwijs', function () {
    return view('kwaliteitsonderwijs');
})->name('kwaliteitsonderwijs');