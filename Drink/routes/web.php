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

// Mostra tutti gli elementi nella pagina 
Route::get('/', 'MainController@index') -> name('index-drink');
// Mostra drink selezionato
Route::get('/show-drink/{id}', 'MainController@show') -> name('show-drink');
// Apri pagina form per nuova entità
Route::get('/create-drink', 'MainController@create') -> name('create-drink');
// Mandare dati form 
Route::post('/store-drink', 'MainController@store') -> name('store-drink');
// Mostrare form per update 
Route::get('/edit/drink/{id}', 'MainController@edit') -> name('edit-drink');
// Update modifiche 
Route::post('/update-drink', 'MainController@update') -> name('update-drink');







