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

Route::get('/','SiteController@home');
Route::get('/about','SiteController@about');
Route::get('/Alumni','SiteController@alumni');
Route::get('/register','SiteController@register');
Route::post('/postregister','SiteController@postregister');

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
    Route::get('/alumni/export','AlumniController@export'); 
    Route::get('/posts','PostController@index')->name('posts.index');

    Route::get('post/add',[
        'uses' => 'PostController@add',
        'as' => 'posts.add',
    ]);

    Route::post('post/create',[
        'uses' => 'PostController@create',
        'as' => 'posts.create'
    ]);



    Route::get('/loker','LokerController@index');
    Route::post('/loker/create','LokerController@create');
    Route::get('/loker/{loker}/edit','LokerController@edit');
    Route::post('/loker/{loker}/update','LokerController@update');
    Route::get('/loker/{loker}/delete','LokerController@delete');
    Route::get('/loker/{loker}/profil','LokerController@profil');

    Route::get('/kuliah','KuliahController@index');
    Route::post('/kuliah/create','KuliahController@create');
    Route::get('/kuliah/{kuliah}/edit','KuliahController@edit');
    Route::post('/kuliah/{kuliah}/update','KuliahController@update');
    Route::get('/kuliah/{kuliah}/delete','KuliahController@delete');

    Route::get('/event','EventController@index');
    Route::post('/event/create','EventController@create');
    Route::get('/event/{event}/edit','EventController@edit');
    Route::post('/event/{event}/update','EventController@update');
    Route::get('/event/{event}/delete','EventController@delete');
 

});


Route::group(['middleware' => ['auth','CheckRole:admin,alumni']],function(){
    Route::get('/dashboard','DashboardController@index');
    Route::get('/profilsaya','AlumniController@profilsaya');
    Route::post('/alumni/{alumni}/update','AlumniController@update');
    Route::get('forum/add',[
        'uses' => 'ForumController@add',
        'as' => 'forum.add',
    ]);
    Route::get('/forum','ForumController@index');
    Route::post('forum/create','ForumController@create');
    Route::get('/forum/{forum}/view','ForumController@view');
    Route::post('/forum/{forum}/view','ForumController@postkomentar');
});

Route::group(['middleware' => ['auth','CheckRole:alumni']],function(){
    Route::get('/daftaralumni','AlumniController@daftaralumni');
    // Route::get('/descloker','LokerController@descloker');
    Route::get('/infoloker','LokerController@infoloker');
    Route::get('/agenda','EventController@agenda');
    Route::get('/detail','EventController@detailevent');
    Route::get('/profilku','AlumniController@profilku');
    Route::get('/alumni/{alumni}/detailalumni','AlumniController@detailalumni');
    Route::get('/infokuliah','KuliahController@infokuliah');
    // Route::get('/detailkuliah','KuliahController@detailkuliah');

});

Route::get('/{slug}',[
    'uses' => 'SiteController@singlepost',
    'as' => 'site.single.post'
]);
