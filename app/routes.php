<?php
Route ::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/faq', 'PagesController@faq');




Route::resource('blogs', 'BlogsController');

Route::resource('blogs', 'BlogsController');

Route::resource('blogs', 'BlogsController');