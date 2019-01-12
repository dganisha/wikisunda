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

Route::get('/', function () {
    return view('page.home');
});
Route::get('/detail', 'IndexController@detail');
Route::get('/art', 'IndexController@art');
Route::get('/culinary', 'IndexController@culinary');
Route::get('/history', 'IndexController@history');
Route::get('/place', 'IndexController@place');

//Administrator
Route::group(['middleware' => ['auth']], function (){
	Route::get('/admin', 'AdminController@index');
	Route::get('/admin/create', 'AdminController@show_create');
	Route::post('/admin/create', 'AdminController@create_artikel');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
