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
    return view('welcome');
});



Auth::routes(['verify'=> true]);


Route::get('/home', 'HomeController@index')->name('home');



//Admin Routes

Route::GET('admin/home','AdminController@index');
Route::GET('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin','Admin\LoginController@login');

//Admin Registration
Route::match(['get', 'post'],'admin/register','AdminController@register')->name('admin.register');

Route::match(['get', 'post'],'remote','RemoteAdmin@register')->name('admin.remoteregister');




Route::get('admin/resetPass','AdminController@showResetform');
Route::post('admin/resetPass','AdminController@resetPass')->name('admin.resetPass');
Route::POST('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail ')->name('admin.password.email');
Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset','Admin\ResetPasswordController@reset');
Route::GET ('admin-password/reset/{token}',' Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::get('/logout','AdminController@logout');
Route::GET('admin/settings','AdminController@settings');


//Category Routes
Route::get('admin/categories','CategoriesController@index');
Route::match(['get', 'post'], 'admin/category/create','CategoriesController@create');
Route::match(['get', 'post'], 'admin/category/edit/{id}','CategoriesController@edit');
Route::match(['get', 'post'], 'admin/delete-category/{id}','CategoriesController@deleteCategory');

//Product Routes
Route::match(['get', 'post'], 'admin/product/create','ProductsController@create');
Route::GET('admin/view-products','ProductsController@viewProducts');
Route::match(['get', 'post'], 'admin/product/edit/{id}','ProductsController@edit');
Route::get('admin/trash-product/{id}','ProductsController@trashProduct');
Route::match(['get', 'post'], 'admin/delete-product/{id}','ProductsController@destroyProduct');


//Bid Routes

Route::GET('admin/view-bids','BidsController@viewBids');

