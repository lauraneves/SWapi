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

Auth::routes();
Route::middleware('auth')->group(function(){
    Route::get('/', function () {
        return view('admin.layouts.app');
        
    })->name('dashboard');
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/planets', 'PlanetController@index')->name('admin.planets.index');
    Route::post('/planets', 'PlanetController@store')->name('admin.planets.store');
    Route::get('/planet/{id}', 'PlanetController@show')->name('admin.planets.form');
    
    Route::get('/starships', 'StarshipController@index')->name('admin.starships.index');
    Route::post('/starships', 'StarshipController@store')->name('admin.starships.store');
    Route::get('/starship/{id}', 'StarshipController@show')->name('admin.starships.form');

    Route::get('/favorites', 'FavoritesController@index')->name('admin.favorites.index');
    Route::get('/favorite/{id}', 'FavoriteController@show')->name('admin.favorites.form');
});