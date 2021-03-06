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

Route::get('/', 'ClienteControlador@index')->name("cliente.index");
Route::get('/novocliente', 'ClienteControlador@create')->name("cliente.create");
Route::post('/cliente','ClienteControlador@store')->name("cliente.store");