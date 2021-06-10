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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => ['auth','CheckRole:admin']],function(){
    Route::get('/dashboard','DashboardController@index');
    Route::get('/alumni','AlumniController@index');
    Route::post('/alumni/create','AlumniController@create');
    Route::get('/alumni/{alumni}/edit','AlumniController@edit');
    Route::post('/alumni/{alumni}/update','AlumniController@update');
    Route::get('/alumni/{alumni}/delete','AlumniController@delete');
    Route::get('/alumni/{alumni}/profil','AlumniController@profil');
});

Route::group(['middleware' => ['auth','CheckRole:admin,alumni']],function(){
    Route::get('/dashboard','DashboardController@index');
});

Route::group(['middleware' => ['auth','CheckRole:alumni']],function(){
    Route::get('/daftaralumni','AlumniController@daftaralumni');
    Route::get('/infoloker','AlumniController@infoloker');
    Route::get('/agenda','AlumniController@agenda');
    Route::get('/profilku','AlumniController@profilku');

});
