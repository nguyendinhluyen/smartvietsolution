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
    // Butterfly - not yet public
    Route::get('butterfly', ['as' => 'temp.butterfly.index', 'uses' => function () {
        return view('templates/butterfly/index');
    }]);
    // Big store
    Route::group(['prefix' => 'bigstore'], function () {
        Route::get('/', ['as' => 'temp.bigstore.index', 'uses' => function () {
            return view('templates/bigstore/index');
        }]);
        Route::get('kitchen', ['as' => 'temp.bigstore.kitchen', 'uses' => function () {
            return view('templates/bigstore/kitchen');
        }]);
        Route::get('contact', ['as' => 'temp.bigstore.contact', 'uses' => function () {
            return view('templates/bigstore/contact');
        }]);
        Route::get('login', ['as' => 'temp.bigstore.login', 'uses' => function () {
            return view('templates/bigstore/login');
        }]);
        Route::get('register', ['as' => 'temp.bigstore.register', 'uses' => function () {
            return view('templates/bigstore/register');
        }]);
    });
    // Gorocy store
    Route::group(['prefix' => 'gorocystore'], function () {
        Route::get('/', ['as' => 'temp.gorocystore.index', 'uses' => function () {
            return view('templates/gorocystore/index');
        }]);
        Route::get('products', ['as' => 'temp.gorocystore.products', 'uses' => function () {
            return view('templates/gorocystore/products');
        }]);
        Route::get('vegetables', ['as' => 'temp.gorocystore.vegetables', 'uses' => function () {
            return view('templates/gorocystore/vegetables');
        }]);
        Route::get('single', ['as' => 'temp.gorocystore.single', 'uses' => function () {
            return view('templates/gorocystore/single');
        }]);
        Route::get('household', ['as' => 'temp.gorocystore.household', 'uses' => function () {
            return view('templates/gorocystore/household');
        }]);
        Route::get('kitchen', ['as' => 'temp.gorocystore.kitchen', 'uses' => function () {
            return view('templates/gorocystore/kitchen');
        }]);
        Route::get('drinks', ['as' => 'temp.gorocystore.drinks', 'uses' => function () {
            return view('templates/gorocystore/drinks');
        }]);
        Route::get('pet', ['as' => 'temp.gorocystore.pet', 'uses' => function () {
            return view('templates/gorocystore/pet');
        }]);
        Route::get('bread', ['as' => 'temp.gorocystore.bread', 'uses' => function () {
            return view('templates/gorocystore/bread');
        }]);
        Route::get('frozen', ['as' => 'temp.gorocystore.frozen', 'uses' => function () {
            return view('templates/gorocystore/frozen');
        }]);
        Route::get('events', ['as' => 'temp.gorocystore.events', 'uses' => function () {
            return view('templates/gorocystore/events');
        }]);
        Route::get('login', ['as' => 'temp.gorocystore.login', 'uses' => function () {
            return view('templates/gorocystore/login');
        }]);
        Route::get('mail', ['as' => 'temp.gorocystore.mail', 'uses' => function () {
            return view('templates/gorocystore/mail');
        }]);
        Route::get('about', ['as' => 'temp.gorocystore.about', 'uses' => function () {
            return view('templates/gorocystore/about');
        }]);
        Route::get('services', ['as' => 'temp.gorocystore.services', 'uses' => function () {
            return view('templates/gorocystore/services');
        }]);
        Route::get('faqs', ['as' => 'temp.gorocystore.faqs', 'uses' => function () {
            return view('templates/gorocystore/faqs');
        }]);
        Route::get('privacy', ['as' => 'temp.gorocystore.privacy', 'uses' => function () {
            return view('templates/gorocystore/privacy');
        }]);
        Route::get('checkout', ['as' => 'temp.gorocystore.checkout', 'uses' => function () {
            return view('templates/gorocystore/checkout');
        }]);
    });
});