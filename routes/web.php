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

Route::get('/', function () {
	return redirect()->route('home');

});


Auth::routes();
 
Route::middleware('auth')->group(function () {   
	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/TravelClub', 'TravelClubController@index')->name('travel.index');
	Route::post('/TravelClub', 'TravelClubController@store')->name('travel.store');
	
	Route::get('/TravelClub/edit', 'TravelClubController@edit')->name('travel.edit');
	Route::post('/TravelClub/update', 'TravelClubController@update')->name('travel.update');

	Route::get('/Show/data/{id}', 'TravelClubController@show')->name('travel.show');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
