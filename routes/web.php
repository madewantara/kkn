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
	
	Route::get('/destinations', [App\Http\Controllers\GuestController::class, 'destination'])->name('destinations');
	
	Route::get('/packages', [App\Http\Controllers\GuestController::class, 'package'])->name('packages');
	
	Route::get('/news', [App\Http\Controllers\GuestController::class, 'news'])->name('news');
	
	Route::get('/contact', [App\Http\Controllers\GuestController::class, 'contact'])->name('contact');
	
	Route::get('/destinations/{slug}', [App\Http\Controllers\GuestController::class, 'destinationDetail'])->name('destination-detail');
	
	Route::get('/packages/{slug}', [App\Http\Controllers\GuestController::class, 'packageDetail'])->name('package-detail');
	
	Route::get('/news/{slug}', [App\Http\Controllers\GuestController::class, 'newsDetail'])->name('news-detail');
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

	Route::resource('news', 'App\Http\Controllers\NewsController', ['except' => ['show']]);
	Route::post('news-attachment-upload', [App\Http\Controllers\NewsController::class, 'attach'])->name('news.attachment.store');
	Route::post('news-gallery-upload', [App\Http\Controllers\GalleryController::class, 'store'])->name('news.gallery.store');

	Route::resource('packages', 'App\Http\Controllers\PackageController', ['except' => ['show']]);
	Route::post('packages-attachment-upload', [App\Http\Controllers\PackageController::class, 'attach'])->name('packages.attachment.store');
	Route::post('packages-gallery-upload', [App\Http\Controllers\GalleryController::class, 'store'])->name('packages.gallery.store');
	Route::post('packages-gallery-delete', [App\Http\Controllers\GalleryController::class, 'delete'])->name('packages.gallery.delete');

	Route::resource('destinations', 'App\Http\Controllers\DestinationController', ['except' => ['show']]);
	Route::post('destinations-attachment-upload', [App\Http\Controllers\DestinationController::class, 'attach'])->name('destinations.attachment.store');
	Route::post('destinations-gallery-upload', [App\Http\Controllers\GalleryController::class, 'storedes'])->name('destinations.gallery.store');
	Route::post('destinations-gallery-delete', [App\Http\Controllers\GalleryController::class, 'deletedes'])->name('destinations.gallery.delete');
});
