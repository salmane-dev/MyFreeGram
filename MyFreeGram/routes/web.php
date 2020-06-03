<?php

use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Route; 
use App\Mail\NewUserWelcomeMail;

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


/* 
Auth::routes();
Route::get('/home', 'ProfilesController@index')->name('home');
*/

Auth::routes(); 


Route::get('/email', function () {
    return new NewUserWelcomeMail();
});

Route::get('/', 'PostsController@index');
Route::get('/p/create', 'PostsController@create');
Route::get('/p/{post}', 'PostsController@show'); 

Route::post('follow/{user}',  'FollowsController@store');

Route::post('/p', 'PostsController@store');

Route::get('/profiles/{user}', 'ProfilesController@index')->name('profiles.show');
Route::get('/profiles/{user}/edit', 'ProfilesController@edit')->name('profiles.edit');
Route::patch('/profiles/{user}', 'ProfilesController@update')->name('profiles.update');
