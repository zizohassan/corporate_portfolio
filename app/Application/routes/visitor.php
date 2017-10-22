<?php

Route::get('/', 'HomeController@welcome');

Route::get('/page/{slug}', 'HomeController@getPageBySlug');
Route::get('contact' , 'ContactController@index');
Route::post('contact' , 'ContactController@storeContact');
Route::get('services' , 'HomeController@services');
Route::get('work' , 'HomeController@work');



Auth::routes();
