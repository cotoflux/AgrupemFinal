<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\TextController;

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('lang/{locale}', 'HomeController@lang')->name('language');

Route::get('/home', 'HomeController@index')->name('home'); 

Route::resource('post', 'PostController');
Route::get('/post/create', 'PostController@create')->name('post.create')->middleware('auth');
Route::get('/post/{post}/edit', 'PostController@edit')->name('post.edit')->middleware('auth');
Route::DELETE('/post/{post}', 'PostController@destroy')->name('post.destroy')->middleware('auth');

Route::resource('resource', 'ResourceController')->except('show');
Route::get('/resource/create', 'ResourceController@create')->name('resource.create')->middleware('auth');
Route::get('/resource/{resource}/edit', 'ResourceController@edit')->name('resource.edit')->middleware('auth');
Route::DELETE('/resource/{resource}', 'ResourceController@destroy')->name('resource.destroy')->middleware('auth');

Route::get('/calendar', 'CalendarController@calendar');

Route::resource('event', 'EventController');
Route::get('/event/create', 'EventController@create')->name('event.create')->middleware('auth');
Route::post('/event/deleteImage/{event}', 'EventController@deleteImage')->name('event.imageDelete')->middleware('auth');
Route::get('/event/{event}/edit', 'EventController@edit')->name('event.edit')->middleware('auth');
Route::DELETE('/event/{event}', 'EventController@destroy')->name('event.destroy')->middleware('auth');

Route::get('contact', 'ContactFormController@create');
Route::post('contact', 'ContactFormController@store');

Route::get('quiSom', 'TextController@quiSom')->name('quiSom'); 
Route::get('queFem', 'TextController@queFem')->name('queFem');
Route::get('festeSoci','TextController@festeSoci')->name('festeSoci'); 
Route::get('/colabora','TextController@Colabora')->name('Colabora');

Route::PATCH('text/{text}', 'TextController@update')->name('name.text')->middleware('auth');