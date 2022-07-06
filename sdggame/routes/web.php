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

Route::get('/geenarmoede', function () { // SDG 1
    return view('geenarmoede');
})->name('geenarmoede');

Route::get('/geenarmoede/opdracht', function () { // SDG 1 OPDRACHT
    return view('geenarmoede-opdracht');
})->name('geenarmoede-opdracht');

Route::get('/geenhonger', function () { // SDG 2
    return view('geenhonger');
})->name('geenhonger');

Route::get('/goedegezondheid', function () { // SDG 3
    return view('goedegezondheid');
})->name('goedegezondheid');

Route::get('/kwaliteitsonderwijs', function () { // SDG 4
    return view('kwaliteitsonderwijs');
})->name('kwaliteitsonderwijs');

Route::get('/gendergelijkheid', function () { // SDG 5 
    return view('gendergelijkheid');
})->name('gendergelijkheid');

Route::get('/schoonwater', function () { // SDG 6 
    return view('schoonwater');
})->name('schoonwater');

Route::get('/energie', function () { // SDG 7
    return view('energie');
})->name('energie');

Route::get('/eerlijkwerk', function () { // SDG 8
    return view('eerlijkwerk');
})->name('eerlijkwerk');

Route::get('/industrie', function () { // SDG 9
    return view('industrie');
})->name('industrie');

Route::get('/ongelijkverminderen', function () { // SDG 10
    return view('geenhonger');
})->name('geenhonger');

Route::get('/duurzamesteden', function () { // SDG 11
    return view('geenhonger');
})->name('geenhonger');

Route::get('/verantwoordeconsumptie', function () { // SDG 12
    return view('geenhonger');
})->name('geenhonger');

Route::get('/klimaatactie', function () { // SDG 13
    return view('geenhonger');
})->name('geenhonger');

Route::get('/leveninhetwater', function () { // SDG 14
    return view('geenhonger');
})->name('geenhonger');

Route::get('/levenophetland', function () { // SDG 15
    return view('geenhonger');
})->name('geenhonger');

Route::get('/vrede', function () { // SDG 16
    return view('geenhonger');
})->name('geenhonger');

Route::get('/partnerschap', function () { // SDG 17
    return view('geenhonger');
})->name('geenhonger');
