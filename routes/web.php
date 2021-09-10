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

Route::get('/', function () {return view('welcome');});
Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', function() {return view('home');})->name('home')->middleware('auth');
Route::get('/motolist', function() {return view('moto_list');})->name('motolist')->middleware('auth');
Route::get('/splist', function() {return view('splist');})->name('splist')->middleware('auth');
Route::get('/user_list', function() {return view('user_list');})->name('user_list')->middleware('auth');
Route::get('/moto_edit_form', [App\Http\Controllers\HomeController::class, 'fetch_moto_info'])->name('moto_edit_form')->middleware('auth');
Route::get('/user_edit_form', [App\Http\Controllers\HomeController::class, 'fetch_user_info'])->name('user_edit_form')->middleware('auth');
Route::get('/sparts_sale_form', [App\Http\Controllers\HomeController::class, 'fetch_sp_info'])->name('spart_sale_form')->middleware('auth');
Route::get('/to_be_invoiced', function() {return view('to_be_invoiced');})->name('to_be_invoiced')->middleware('auth');
Route::get('/sold_moto_list', function() {return view('sold_moto_list');})->name('sold_moto_list')->middleware('auth');
//Route::get('/sold_moto_chart', function() {return view('sold_moto_chart');})->name('sold_moto_chart')->middleware('auth');
Route::post('/update_spart_sale_new', [App\Http\Controllers\SpartsController::class, 'update'])->name('update_spart_sale_new')->middleware('auth');
Route::post('/update_moto_details', [App\Http\Controllers\MotosController::class, 'update'])->name('update_moto_details')->middleware('auth');
Route::post('/update_user_details', [App\Http\Controllers\HomeController::class, 'update_user'])->name('update_user_details')->middleware('auth');
Route::get('/sold_moto_chart', [App\Http\Controllers\MotosController::class,'sales_chart'])->name('sold_moto_chart')->middleware('auth');
Route::get('/sparts_create_form', function() {return view('sparts_create_form');})->name('sparts_create_form')->middleware('auth');
Route::get('/user_create_form', function() {return view('user_create_form');})->name('user_create_form')->middleware('auth');
Route::post('/create_new_user', [App\Http\Controllers\HomeController::class,'create_user'])->name('create_new_user')->middleware('auth');
Route::post('/create_new', [App\Http\Controllers\SpartsController::class,'create'])->name('create_new')->middleware('auth');

