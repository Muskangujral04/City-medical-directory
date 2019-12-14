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

Route::get('/','IndexController@homepage');
Route::get('/listing','IndexController@listing');
Route::get('/hospital','IndexController@hospital');
Route::get('/doctor/{id?}','IndexController@doctor');
Route::get('/index','IndexController@index');
Route::get('/profile/{id}','IndexController@profile');
Route::get('/contact','IndexController@contact');
Route::post('/query','IndexController@query');
Route::post('/filter','IndexController@filter');


Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::prefix('admin')->group(function()
{
	Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/home','AdminController@index')->name('admin.home');
	Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
	Route::get('/pending','AdminController@pending');
	Route::get('/details/{id}','AdminController@details');
	Route::get('/approve/{id}','AdminController@approval');
	Route::get('/reject/{id}','AdminController@reject');
	Route::get('/rejected','AdminController@rejectedApproval');
	Route::get('/approved','AdminController@approved');
});
Route::prefix('user')->group(function()
{
Route::get('/form','HomeController@show');
Route::post('/form','HomeController@store');
Route::get('/home', 'HomeController@home')->name('home');
Route::patch('/update','HomeController@update');
Route::get('/profile','HomeController@index');
Route::get('/query','HomeController@getQuery');
Route::get('/reply/{id}','HomeController@replyForm');
Route::post('/vreply','HomeController@reply');
});

