
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

Auth::routes();
Route::middleware('auth')->group(function(){

    Route::get('/', function () {
        return view('admin.layouts.app');
        
    })->name('dashboard');

    Route::get('/home', 'HomeController@index')->name('home');
    

    Route::get('/planets', 'PlanetController@index')->name('admin.planets.index');
    Route::get('/planet/{id}', 'PlanetController@show')->name('admin.planets.form');
    
    Route::get('/starships', 'StarshipController@index')->name('admin.starships.index');
    Route::get('/starship/{id}', 'StarshipController@show')->name('admin.starships.form');

    // Route::get('/saved', 'StarshipController@index')->name('admin.saved.index');
    // Route::get('/starship/{id}', 'StarshipController@show')->name('admin.saved.form');
});