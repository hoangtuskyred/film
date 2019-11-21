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
Route::get('/the-loai/{link}', 'AppController@category');
Route::get('/chi-tiet/{link}.html', 'AppController@detail');
Route::get('/xem-phim/{link}.html', 'AppController@watch');
Route::post('/api/urlFilm', 'AppController@getUrlFilm');
Route::get('/data', 'AppController@data');

// Backend
Route::get('/admin', 'AdminController@index');
Route::get('/admin/films', 'AdminController@films');
Route::get('/admin/categories', 'AdminController@categories');
Route::get('/admin/episodes', 'AdminController@episodes');

// Film
Route::post('/films', 'FilmController@create');
Route::get('/films/{id}', 'FilmController@getFilmById');
Route::put('/films/{id}/edit', 'FilmController@edit');
Route::delete('/films/{id}', 'FilmController@delete');

// Category
Route::post('/categories', 'CategoryController@create');
Route::get('/categories/{id}', 'CategoryController@getCategoryById');
Route::put('/categories/{id}/edit', 'CategoryController@edit');
Route::delete('/categories/{id}', 'CategoryController@delete');

// Episode
Route::get('/films/{id}/episodes', 'EpisodeController@getEpisodesWithFilmId');
Route::post('/films/{id}/episodes', 'EpisodeController@create');
Route::get('/episodes/{id}', 'EpisodeController@getEpisodeById');
Route::put('/episodes/{id}/edit', 'EpisodeController@edit');
Route::delete('/episodes/{id}', 'EpisodeController@delete');
