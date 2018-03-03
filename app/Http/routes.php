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

Route::get('/', ['as' => 'home', 'uses' => function () {
    return view('layouts/home/index');
}]);
Route::post('contact/save', ['as' => 'server.contact.save', 'uses' => 'Server\ContactController@SaveContact']);
