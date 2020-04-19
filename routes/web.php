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
Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/','WelcomeController@index')->name('welcome');

Route::resource('imgbanniere','ImgbanniereController');
Route::resource('about','AboutController');
Route::resource('service','ServiceController');
Route::resource('work','WorkController');
Route::resource('contact','ContactController');
Route::resource('diaporama','DiaporamaController');
Route::post('/emailenvoyer' ,'MailController@store')->name('mail');
Route::get('/news','MailController@index');

// ///////////////////////////////////////////////////
// Route::get('/banniere','ImgbanniereController@create')->name('create');

// route::post('/save','ImgbanniereController@store')->name('save');
// route::get('/','ImgbanniereController@edit')->name('introch');
// route::post('/upadte/{id}','ImgbanniereController@update')->name('update');
// route::get('/delete/{id}','ImgbanniereController@destroy')->name('delete');

