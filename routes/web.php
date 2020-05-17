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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add', 'addController@index')->name('add');
Route::post('/add', 'addController@create');
Route::get('/busshedule', 'addController@list')->name('busshedule');
Route::get('/busSummary', 'busSummaryController@index')->name('busSummary');
Route::get('/edit/{id}', ['as'=>'edit','uses'=>'addController@edit']);
Route::post('/edit/{id}', 'addController@update');
Route::get('/delete/{id}', 'addController@delete')->name('delete');
Route::post('/delete/{id}', 'addController@destroy')->name('destroy');
//Route::post('/add', 'addController@create');
//Route::get('/profile/{id}', 'HomeController@profile')->name('profile');
Route::get('/editProfile/{id}', ['as'=>'editProfile','uses'=>'UserController@edit']);
Route::post('/editProfile/{id}', 'UserController@update');
Route::get('/profile/{id}', [
   'middleware' => 'auth',
   'as'=> 'profile',
   'uses' => 'UserController@profile'
]);
