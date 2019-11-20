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

// Frontend
Route::get('/', 'AppController@index');
Route::get('/chi-tiet/{id}', 'AppController@detail');
Route::get('/xem-phim/{id}', 'AppController@watch');
Route::post('/api/urlFilm', 'AppController@getUrlFilm');
Route::get('/data', 'AppController@data');

// Backend
Route::get('/admin', 'AdminController@index');
Route::get('/admin/films', 'AdminController@films');
Route::get('/admin/categories', 'AdminController@categories');
Route::get('/admin/episodes', 'AdminController@episodes');

Route::post('/films', 'FilmController@create');
Route::get('/films/{id}', 'FilmController@getFilmById');
Route::put('/films/{id}/edit', 'FilmController@edit');
Route::delete('/films/{id}', 'FilmController@delete');
