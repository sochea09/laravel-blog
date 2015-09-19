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

Route::get('/', 'Front\Home@index');

//Admin
Route::group(['prefix' => 'admin'], function(){
    Route::get('', 'Admin\Dashboard@index');
    Route::get('page', ['as' => 'pageHome','uses' => 'Admin\Page@index']);
    Route::get('page/{id}/edit', 'Admin\Page@edit');
    Route::get('page/create', 'Admin\Page@create');
    Route::get('post', ['as' => 'postHome', 'uses' => 'Admin\Post@index']);
    Route::get('post/create', 'Admin\Post@create');
    Route::get('post/{id}/edit', 'Admin\Post@edit');
    Route::get('media', ['as' => 'mediaHome', 'uses' => 'Admin\Media@index']);
    Route::get('media/create', ['as' => 'createImage','uses' => 'Admin\Media@create']);
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
