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
    return view('main');
})->name('main');

Route::get('/order', function () {
    return view('order');
})->name('SubmitOrder');

// Route::get('/catalog', function () {
//     return view('catalog');
// })->name('catalog');
Route::get('/catalog','Catalog@getItems')->name('catalog');
Route::get('/item','Item@description')->name('item');
// Route::get('/item', function () {
//     return view('item');
// })->name('item');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
// Route::get('/order', function () {
//     return view('order');
// })->name('contacts');

Route::post('letter','Letter@postLetter')->name('letter');
Route::post('order','Order@postOrder')->name('order');

