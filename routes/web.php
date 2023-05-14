<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::post('callback_order/store', 'CallbackOrderController@store')->name(
    'callback_order.store',
);

Route::middleware('page')->group(function () {
    // Route::get('/', 'HomeController@index')->name('home');
    // Route::get('catalog', 'CatalogController@index')->name('catalog');
    // Route::get('categories/{slug?}', 'CatalogController@categories')
    //                     ->name('categories');

    // Route::get('product/{slug?}', 'ProductController@index')->name('products');

    // Route::get('orders/{order:uuid}', 'OrderController@index')->name('orders');

    Route::get('/', 'IndexController@index')->name('index');

    Route::get('articles', 'ArticleController@index')->name('articles');
    Route::get('article/{slug}', 'ArticleController@show')->name('article');

    // все вставлять до этого!
    Route::get('{path}', 'PageController@index')
        ->where('path', '.*')
        ->name('pages');
});
