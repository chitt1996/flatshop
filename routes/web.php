<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'namespace' => 'Client',
], function() {
    Route::get('', [
        'uses' => 'HomeController@index'
    ]);
    Route::get('lien-he','HomeController@contact');
    Route::get('gioi-thieu','HomeController@details');

    Route::get('gio-hang','CartController@cart');
    Route::get('gio-hang/thanh-toan','CartController@checkout');

    Route::get('san-pham','ProductController@productlitst');
});