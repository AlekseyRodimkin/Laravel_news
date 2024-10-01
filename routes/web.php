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
|
*/

Route::get('/', 'IndexController@index')->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');



Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', 'contactController@submit')->name('contact-form');

Route::get('/contacts/userMessages', 'contactController@showUserMessages')->name('contacts-usermessages');

Route::get('/contacts/userMessages/{id}', 'contactController@showOneMessage')->name('contacts-onemessage');

Route::get('/contacts/userMessages/{id}/updateForm', 'contactController@showUpdateForm')->name('contacts-updateform');

Route::post('/contacts/userMessages/{id}/updateSave', 'contactController@update')->name('contact-update');

Route::get('/contacts/userMessages/{id}/delete', 'contactController@delete')->name('contacts-delete');



Route::get('/posts', 'PostController@index')->name('posts.index');

Route::get('/posts/{id}', 'PostController@show')->name('posts.show');
