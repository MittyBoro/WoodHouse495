<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::middleware(['roles:editor'])->group(function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::resource('users', 'UserController')->except(['show']);
    Route::post('users/{user}/verify', 'UserController@verify')->name(
        'users.verify',
    );

    Route::resource('media', 'MediaController')->only(['store', 'destroy']);

    Route::resource('callback_orders', 'CallbackOrderController')->only([
        'index',
        'destroy',
    ]);

    Route::resource('portfolios', 'PortfolioController')->except(['show']);
    Route::resource('pages', 'PageController');
    Route::resource('articles', 'ArticleController');

    Route::middleware(['roles:admin'])->group(function () {
        Route::resource('props', 'PropController')->except('show');
        Route::post('props/update_list', 'PropController@updateList')->name(
            'props.update_list',
        );

        Route::get('optimize', function () {
            Artisan::call('optimize:clear');

            if (config('app.environment') == 'production') {
                Artisan::call('optimize');
            }

            return back();
        })->name('optimize');
    });

    // проверка внешнего вида писем
    Route::prefix('mail')->group(function () {
        Route::get('order/{id?}', function ($id = null) {
            $invoice = App\Models\CallbackOrder::findOrFail($id);
            return new App\Mail\SendCallbackOrder($invoice, null);
        });
    });
});

require __DIR__ . '/auth.php';
