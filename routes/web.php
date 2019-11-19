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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'FilmController@index');
Route::get('/chi-tiet/{id}', 'FilmController@detail');
Route::get('/xem-phim/{id}', 'FilmController@watch');
Route::post('/api/urlFilm', 'FilmController@getUrlFilm');
Route::get('/data', 'FilmController@data');

Route::resource('admin-film','AdminController');
//Route::post('admin-film/{id}/restore','AdminController@restore');

Route::get('test-cat','CategoryController@index');
//Route::resource('category','CategoryController');
//Route::resource('episode','CategoryController');
