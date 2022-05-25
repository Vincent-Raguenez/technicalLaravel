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

Route::get('/algo/exo1', 'AlgoController@exo1');
Route::get('/algo/exo2/{word}', 'AlgoController@exo2');
Route::get('/algo/exo3/{num}', 'AlgoController@exo3');


Route::get('/solution/exo1', 'SolutionController@exo1');
Route::get('/solution/exo2/{word}', 'SolutionController@exo2');
Route::get('/solution/exo3/{num}', 'SolutionController@exo3');
