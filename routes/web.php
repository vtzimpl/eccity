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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
Route::get('/motolist', function() {
    return view('moto_list');
})->name('motolist')->middleware('auth');


Route::get('/moto_edit_form', [App\Http\Controllers\HomeController::class, 'fetch_moto_info'])->name('fetch_moto_info');
Route::get('/to_be_invoiced', function() {return view('to_be_invoiced');})->name('to_be_invoiced')->middleware('auth');