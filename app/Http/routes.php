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

Route::get('/', ['as' => 'home', 'uses' => 'Front\Home@index']);
Route::get('/page/{slug}', 'Front\Page@index');
Route::get('/article/{id}', 'Front\Page@getDetail');

//Admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth.admin'], function(){
    Route::get('', ['as' => 'dashboard', 'uses' => 'Admin\Dashboard@index']);
    Route::get('page', ['as' => 'pageHome','uses' => 'Admin\Page@index']);
    Route::get('page/{id}/edit', 'Admin\Page@edit');
    Route::get('page/create', 'Admin\Page@create');
    Route::get('post', ['as' => 'postHome', 'uses' => 'Admin\Post@index']);
    Route::get('post/create', 'Admin\Post@create');
    Route::get('post/{id}/edit', 'Admin\Post@edit');
    Route::get('media', ['as' => 'mediaHome', 'uses' => 'Admin\Media@index']);
    Route::get('media/create', ['as' => 'createImage','uses' => 'Admin\Media@create']);
    Route::get('media/gallery', 'Admin\Media@gallery');
    Route::post('page/store', 'Admin\Page@store');
    Route::post('page/{id}/update', 'Admin\Page@update');
    Route::post('page/delete', 'Admin\Page@delete');
    Route::post('post/store', 'Admin\Post@store');
    Route::post('media/store', ['as'=>'postImage','uses'=>'Admin\Media@store']);
    Route::post('media/crop', ['as'=>'cropImage','uses'=>'Admin\Media@crop']);
    Route::post('media/delete', 'Admin\Media@delete');
    Route::post('post/{id}/update', 'Admin\Post@update');
    Route::post('post/delete', 'Admin\Post@delete');
});

//Setting
Route::group(['prefix' => 'admin', 'middleware' => 'auth.admin'], function(){
    Route::get('setting/category', ['as'=>'catHome', 'uses'=>'Admin\Setting\Category@index']);
    Route::get('setting/category/{id}/edit', 'Admin\Setting\Category@edit');
    Route::get('setting/category/create', 'Admin\Setting\Category@create');
    Route::post('setting/category/store', 'Admin\Setting\Category@store');
    Route::post('setting/category/{id}/update', 'Admin\Setting\Category@update');
    Route::post('setting/category/delete', 'Admin\Setting\Category@delete');

});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthAdmin@getLogin');
Route::post('auth/login', 'Auth\AuthAdmin@postLogin');
Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthAdmin@getLogout']);

// Registration routes...
Route::get('auth/register', 'Auth\AuthAdmin@getRegister');
Route::post('auth/register', 'Auth\AuthAdmin@postRegister');
