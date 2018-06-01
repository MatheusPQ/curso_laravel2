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

// Route::namespace('portal')->group(function(){ //por exemplo, pegar os controllers da pasta portal.. e abaixo, da pasta fórum
    Route::get('/', 'HomeController@index');
    Route::get('/user/create', 'UserController@create');
    Route::post('/user/store', 'UserController@store');
// });

//GUEST: só para usuarios que nao estao logados
// Route::get('/login', 'LoginController@index')->middleware('guest');

//AUTH: só para usuários que estão logados.. senão redireciona de volta
// Route::get('/login', 'LoginController@index')->middleware('auth');
Route::get('/login', 'LoginController@index')->middleware('my_auth');
Route::post('/login/store', 'LoginController@store');
// Route::get('/login/destroy', 'LoginController@destroy');
// Route::post('/login/store', 'LoginController@store');
Route::get('/user/create', 'UserController@create');
Route::post('/user/store', 'UserController@store');


// Route::namespace('forum')->group(function(){
//     Route::get('/forum', 'ForumController@index');
// });

// Route::namespace('admin')->prefix('admin')->group(function(){
//     //Vai por o prefixo 'admin' antes de cada rota
//     //admin/post/create
//     Route::get('/admin', 'AdminController@index');
//     Route::get('/post/create', 'AdminController@create');
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
