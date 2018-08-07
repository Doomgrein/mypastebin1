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

Route::get('/', 'IndexController@index');

Route::get('message/{id}', 'IndexController@show') -> name('messageShow');

Route::get('add','IndexController@add');
Route::post('add','IndexController@store')->name('messageStore');

Route::delete('delete/{message}', function (App\Message $message){
	
	$message->delete();
	return redirect('/');

})->name('messageDelete');