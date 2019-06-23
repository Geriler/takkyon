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

use App\Http\Middleware\CheckAdmin;
use App\Http\Middleware\CheckLevel;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('questions', 'QuestionsController')->middleware(CheckAdmin::class);

Route::resource('progress', 'ProgressController')->middleware(CheckAdmin::class);

Route::get('map', function() {
	return view('map');
})->middleware('auth');

Route::get('map/{id}', 'MapController@index')->name('map.index')->middleware(CheckLevel::class);

Route::post('map/{id}/check', 'MapController@checkAnswer')->name('map.check')->middleware('auth');
Route::get('map/{id}/check', function ($id) {
	return redirect('/map');
})->name('map.check')->middleware('auth');