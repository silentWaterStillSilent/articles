<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Auth::loginUsingId(2);
//dd($this);
Route::get('/','SitesController@index' );

/*Route::get('/', function () {
//    return 'hello world';
    return view('welcome');
});*/
Route::get('/about','SitesController@about' );
/*
Route::get('/about', function () {
//    return 'I am Du';
//    return view('welcome');
    return view('sites.about');
});*/

 // blog/index.php

// laravelist/blog/index.php

Route::get('/contact','SitesController@contact' );

//Route::get('/articles','ArticlesController@index');
//
//Route::get('/articles/create', 'ArticlesController@create');
//
//Route::get('/articles/{id}', 'ArticlesController@show');
//Route::post('/articles', 'ArticlesController@store');

Route::resource('articles','ArticlesController');


Route::get('auth/login','Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');

Route::get('auth/register','Auth\AuthController@getRegister');
Route::post('auth/register','Auth\AuthController@postRegister');

Route::get('auth/logout','Auth\AuthController@getLogout');

