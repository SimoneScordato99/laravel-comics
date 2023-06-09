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
    $comics = config('comics.comics');
    return view('pages.main', compact('comics'));
})->name('main');

Route::get('/singolo', function () {
    return view('pages.singolo');
})->name('singolo');

