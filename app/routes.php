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

Route::get( 'about', [ 'as' => 'about', 'uses' => 'PagesController@about' ] );
Route::get( 'contact', [ 'as' => 'contact', 'uses' => 'PagesController@contact' ] );
Route::get( 'contact', [ 'as' => 'contact', 'uses' => 'PagesController@contact' ] );
Route::get( 'project/upload', 'PagesController@getProjectImageUpload' );
Route::post( 'project/upload', 'PagesController@postProjectImageUpload' );
Route::post( 'project/deleteImage', 'PagesController@postDeleteImage' );
Route::post( 'project/updateCaption', 'PagesController@updateCaption' );
Route::get( '/', [ 'as' => 'home', 'uses' => 'PagesController@index' ] );
Route::get( 'project', 'PagesController@home' );
Route::post( 'project', 'PagesController@postHome' );

//Apartment page
Route::get( 'apartment', 'ApartmentController@home' );
Route::post( 'apartment', 'ApartmentController@postHome' );
Route::get( 'apartment/upload', 'ApartmentController@getProjectImageUpload' );
Route::post( 'apartment/upload', 'ApartmentController@postProjectImageUpload' );
Route::post( 'apartment/deleteImage', 'ApartmentController@postDeleteImage' );
Route::post( 'apartment/updateCaption', 'ApartmentController@updateCaption' );

// Account
Route::get( 'account', [ 'as' => 'account', 'uses' => 'AccountController@index' ] );
Route::get( 'register', [ 'as' => 'account.create', 'uses' => 'AccountController@create' ] );
Route::post( 'register', [ 'as' => 'account.store', 'uses' => 'AccountController@store' ] );

// Session
Route::get( 'login', [ 'as' => 'login', 'uses' => 'SessionController@create' ] );
Route::get( 'logout', 'SessionController@destroy' );
Route::get( 'facebook-login', [ 'as' => 'login-fb', 'uses' => 'SessionController@loginWithFacebook' ] );
Route::get( 'google-login', [ 'as' => 'login-gg', 'uses' => 'SessionController@loginWithGoogle' ] );
Route::resource( 'session', 'SessionController', [ 'only' => [ 'create', 'store', 'destroy' ] ] );
