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

Route::get('/', 'App\Http\Controllers\AppController@index');
Route::get('games', 'App\Http\Controllers\AppController@index');

Route::get('games/manage', 'App\Http\Controllers\GameController@index');
Route::get('games/create', 'App\Http\Controllers\GameController@create');
Route::post('games/create', 'App\Http\Controllers\GameController@store')->name('game.store');
Route::get('games/edit/{id}', 'App\Http\Controllers\GameController@edit')->name('game.edit');
Route::put('games/edit/{id}', 'App\Http\Controllers\GameController@update')->name('game.update');
Route::delete('games/delete/{id}', 'App\Http\Controllers\GameController@destroy')->name('game.delete');
