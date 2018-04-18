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
    // Eleganter
    Route::group(['prefix' => 'eleganter'], function () {
        Route::get('/', ['as' => 'temp.eleganter.index', 'uses' => function () {
            return view('templates/eleganter/index');
        }]);
        Route::get('products', ['as' => 'temp.eleganter.products', 'uses' => function () {
            return view('templates/eleganter/products');
        }]);
        Route::get('about', ['as' => 'temp.eleganter.about', 'uses' => function () {
            return view('templates/eleganter/about');
        }]);
        Route::get('contact', ['as' => 'temp.eleganter.contact', 'uses' => function () {
            return view('templates/eleganter/contact');
        }]);
        Route::get('premium', ['as' => 'temp.eleganter.premium', 'uses' => function () {
            return view('templates/eleganter/premium');
        }]);
        Route::get('gallery', ['as' => 'temp.eleganter.gallery', 'uses' => function () {
            return view('templates/eleganter/gallery');
        }]);
    });
    // butterfly
    Route::get('butterfly', ['as' => 'temp.butterfly.index', 'uses' => function () {
        return view('templates/butterfly/index');
    }]);
    // big store
    Route::group(['prefix' => 'bigstore'], function () {
        Route::get('/', ['as' => 'temp.bigstore.index', 'uses' => function () {
            return view('templates/bigstore/index');
        }]);
        Route::get('kitchen', ['as' => 'temp.bigstore.kitchen', 'uses' => function () {
            return view('templates/bigstore/kitchen');
        }]);
    });
});