<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| *Custom addition* Written below is for guest
|
*/

Route::group(['guest'], function(){
	Route::get('/', [App\Http\Controllers\GuestController::class, 'index'])->name('welcome');
	
	Route::get('/pendataancovid-19', [App\Http\Controllers\GuestController::class, 'indexCovid'])->name('pendataan');

	Route::post('/storecovid-19', [App\Http\Controllers\GuestController::class, 'store'])->name('storecovid19');
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| *Custom addition* Written below is for admin
|
*/

Auth::routes();

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function(){
	Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::post('/profile/save_image', [App\Http\Controllers\ProfileController::class, 'save_image'])->name('save.profile.picture');

	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	Route::get('map', function () {return view('pages.maps');})->name('map');
	Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	Route::get('table-list', function () {return view('pages.tables');})->name('table');

	Route::resource('covids', 'App\Http\Controllers\CovidController', ['except' => ['show']]);
	Route::resource('wargas', 'App\Http\Controllers\WargaController', ['except' => ['show']]);
});
