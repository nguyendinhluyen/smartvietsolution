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

// Teamplates
Route::group(['prefix' => 'temp'], function () {
    // Boxify
    Route::get('boxify', ['as' => 'temp.boxify.index', 'uses' => function () {
        return view('templates/boxify/index');
    }]);
    // Fashion
    Route::group(['prefix' => 'fashion'], function () {
        Route::get('/', ['as' => 'temp.fashion.index', 'uses' => function () {
            return view('templates/fashion/index');
        }]);
        Route::get('about', ['as' => 'temp.fashion.about', 'uses' => function () {
            return view('templates/fashion/about');
        }]);
        Route::get('archive', ['as' => 'temp.fashion.archive', 'uses' => function () {
            return view('templates/fashion/archive');
        }]);
        Route::get('contact', ['as' => 'temp.fashion.contact', 'uses' => function () {
            return view('templates/fashion/contact');
        }]);
        Route::get('post', ['as' => 'temp.fashion.post', 'uses' => function () {
            return view('templates/fashion/post');
        }]);
    });
});

