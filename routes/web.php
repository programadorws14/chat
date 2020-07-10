<?php

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

Route::get('/', 'HomeController@index')->name('home');
Route::post('/create', 'HomeController@store')->name('home.store');

Route::get('/chat', 'ChatController@index')->name('chat.home');
Route::get('/sair', 'ChatController@sairdoChat')->name('chat.sair');
