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
Route::get('/login', function(){
	return view('login');
});
Route::get('/login2', function(){
	return view('login2');
});
Route::get('/landingpage',function(){
	return view('landingpage');
});
Route::get('/v_index',function(){
	return view('v_index');
});
Route::get('/cover',function(){
	return view('cover');
});
Route::get('/index',function(){
	return view('index');
});
Route::get('/exa',function(){
	return view('exa');
});
Route::get('/lopop',function(){
	return view('loginpop');
});
Route::get('/Form',function(){
	return view('Form');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/covid', 'PandemiController@index');
Route::get('/covidcreate', 'PandemiController@create');
Route::post('/covid', 'PandemiController@store');

Route::get('/covid{id}edit', 'PandemiController@edit');
Route::patch('/covid/{id}', 'PandemiController@update');
Route::delete('/covid/{id}', 'PandemiController@destroy');


