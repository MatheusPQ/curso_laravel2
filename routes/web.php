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

Route::get('/', 'HomeController@index');
Route::post('/produto/store', 'ProdutoController@store');
// Route::get('/produto/{produto}/valor/{valor}', 'ProdutoController@show');
Route::get('/posts', 'PostController@index');
Route::post('/posts/store', 'PostController@store');

// Route::put()