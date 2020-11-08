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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/planets', [App\Http\Controllers\PlanetController::class, 'index'])->name('planets.index');
    // for($i = 1; $i <= $number_pages; $i++) {
        Route::get('/planets/index.php?page=', [App\Http\Controllers\PlanetController::class, 'index'])->name('planets.index');
    // }

    Route::get('/starships', [App\Http\Controllers\StarshipController::class, 'index'])->name('starship.index');
}); 