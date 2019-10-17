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

Auth::routes(['register' => false]);

 //Web
Route::get('/', 'Web\PagesController@index')->name('home');

//Admin
Route::middleware(['auth'])->group(function(){
	Route::get('dashboard', 'Admin\PagesController@index')->name('dashboard');
	Route::resource('users', 'Admin\UsersController');
	Route::resource('roles', 'Admin\RolesController');
	Route::resource('categories', 'Admin\CategoriesController');
	Route::resource('posts', 'Admin\PostsController');
	Route::resource('images', 'Admin\ImagesController');	
	Route::get('user/profile', 'Admin\PagesController@profile')->name('user.profile');
	Route::get('user/profile/edit', 'Admin\PagesController@edit_profile')->name('user.profile.edit');
	Route::patch('user/profile', 'Admin\PagesController@update_profile')->name('user.profile.update');
});

Route::resource('messages', 'Admin\MessagesController');

