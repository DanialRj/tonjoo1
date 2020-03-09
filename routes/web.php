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
Route::get('/', 'HomeController@index');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear ');
    return "Cache is cleared";
});

Auth::routes();

Route::get('/test-one', 'PagesController@testOne');

Route::get('/test-two', 'PagesController@testSecond');
Route::get('/test-two/{id}/edit', 'PagesController@testSecondEdit');
Route::post('/test-two-save', 'PagesController@testSecondStore');
Route::put('test-two-update/{id}', 'PagesController@testSecondUpdate');
Route::delete('test-two-delete/{id}', 'PagesController@testSecondDestroy');

Route::get('/test-tree', 'PagesController@testThird');

Route::get('/tonjoo-tree', function() {
    return redirect('http://tonjoo2.temo-id.com/');
})->middleware('auth');

Route::get('/tonjoo-tree', function() {
    return redirect('http://tonjoo3.temo-id.com/api/numbers/fibo/5');
})->middleware('auth');
