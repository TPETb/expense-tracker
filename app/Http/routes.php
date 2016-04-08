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

Route::get('/', [
    'as' => 'index',
    'uses' => 'AngularController@serveApp'
]);

$api = app(Dingo\Api\Routing\Router::class);
$api->version('v1', function ($api) {
    $api->resource('currency', \App\Http\Controllers\CurrencyController::class, [
        'only' => [
            'index'
        ]
    ]);

    $api->resource('expense-tag', \App\Http\Controllers\ExpenseTagController::class, [
        'only' => [
            'index'
        ]
    ]);

    $api->resource('expense', \App\Http\Controllers\ExpenseController::class);
});