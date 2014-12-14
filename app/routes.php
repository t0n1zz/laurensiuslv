<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',array('as' => 'home', 'uses' => 'PostsController@index'));
Route::get('jetassault',array('as' => 'jetassault', 'uses' => 'PostsController@jetassault'));
Route::get('jetassaultgatekeeper',array('as' => 'jetassaultgatekeeper', 'uses' => 'PostsController@jetassaultgatekeeper'));
Route::get('myworld',array('as' => 'myworld', 'uses' => 'PostsController@myworld'));
Route::get('kategori/{id}',array('as' => 'kategori', 'uses' => 'PostsController@kategori'))->where('id','[1-9][0-9]*');
Route::get('post/{id}',array('as' => 'post', 'uses' => 'PostsController@post'))->where('id','[1-9][0-9]*');

Route::get('about',array('as' => 'about', function()
{
    return View::make('about');
}));

Route::get('search',array('as' => 'search','uses' => 'PostsController@search'));

Route::get('index_kategori/{id}',array(
    'as' => 'index_kategori',
    'uses' => 'PostsController@index_kategori'))->where('id','[1-9][0-9]*');

//admin
Route::group(array('prefix' => 'admins'), function(){
    Route::get('login',array('as' => 'admins.login','uses' => 'AdminAuthController@getLogin'));
    Route::post('login',array('as' =>'admins.login.post','uses' => 'AdminAuthController@postLogin'));
    Route::get('logout',array('as' => 'admins.logout','uses' => 'AdminAuthController@getLogout'));
    Route::get('back',array('as' => 'admins.back','uses' => 'AdminAuthController@getBack'));
});

Route::get('admins',array('before' => 'auth', function()
{
    return View::make('admins.index');
}));

Route::group(array('prefix' => 'admins','before' => 'auth'), function(){
	Route::post('artikels/update_kategori',array(
			'as' => 'admins.artikels.update_kategori', 
			'uses' => 'AdminArtikelController@update_kategori'));

	Route::post('artikels/update_status',array(
			'as' => 'admins.artikels.update_status', 
			'uses' => 'AdminArtikelController@update_status'));

    Route::get('artikels/index_kategori/{id}',array(
        'as' => 'admins.artikels.index_kategori',
        'uses' => 'AdminArtikelController@index_kategori'))->where('id','[1-9][0-9]*');

	Route::resource('artikels','AdminArtikelController',array('except' => array('show')));
    Route::resource('kategoriartikels','AdminKategoriartikelsController',array('except' => array('show')));
    Route::resource('users','AdminUsersController',array('only' => array('index','edit','update')));
});

Route::group(array('before' => 'auth'), function()
{
    \Route::get('elfinder', 'Barryvdh\Elfinder\ElfinderController@showIndex');
    \Route::any('elfinder/connector', 'Barryvdh\Elfinder\ElfinderController@showConnector');
});
\Route::get('elfinder/tinymce', 'Barryvdh\Elfinder\ElfinderController@showTinyMCE4');