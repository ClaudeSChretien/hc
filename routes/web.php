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


Route::get('/gallery', function () {
    return view('gallery');
});
Route::resource('/', 'HomeController');
Route::resource('contacts', 'ContactController');
Route::resource('photos', 'photoController');
Route::resource('blogs', 'blogController');
Route::resource('blogsManager', 'blogManagerController');
