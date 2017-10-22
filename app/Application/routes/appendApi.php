<?php

#user
Route::post('users/login' , 'UserApi@login');
Route::get('users/getById/{id}', 'UserApi@getById');
Route::get('users/delete/{id}', 'UserApi@delete');
Route::post('users/add', 'UserApi@add');
Route::post('users/update', 'UserApi@update');
Route::get('users/{limit?}/{offset?}', 'UserApi@index');
Route::get('users/getUserByToken' , 'UserApi@getUserByToken');

#page
Route::get('page/getById/{id}/{lang?}', 'PageApi@getById');
Route::get('page/delete/{id}', 'PageApi@delete');
Route::post('page/add', 'PageApi@add');
Route::post('page/update/{id}', 'PageApi@update');
Route::get('page/{limit?}/{offset?}/{lang?}', 'PageApi@index');


#categorie
Route::get('categorie/getById/{id}/{lang?}', 'CategorieApi@getById');
Route::get('categorie/delete/{id}', 'CategorieApi@delete');
Route::post('categorie/add', 'CategorieApi@add');
Route::post('categorie/update/{id}', 'CategorieApi@update');
Route::get('categorie/{limit?}/{offset?}/{lang?}', 'CategorieApi@index');


#services
Route::get('services/getById/{id}/{lang?}', 'ServicesApi@getById');
Route::get('services/delete/{id}', 'ServicesApi@delete');
Route::post('services/add', 'ServicesApi@add');
Route::post('services/update/{id}', 'ServicesApi@update');
Route::get('services/{limit?}/{offset?}/{lang?}', 'ServicesApi@index');

#product
Route::get('product/getById/{id}/{lang?}', 'ProductApi@getById');
Route::get('product/delete/{id}', 'ProductApi@delete');
Route::post('product/add', 'ProductApi@add');
Route::post('product/update/{id}', 'ProductApi@update');
Route::get('product/{limit?}/{offset?}/{lang?}', 'ProductApi@index');

#testimonial
Route::get('testimonial/getById/{id}/{lang?}', 'TestimonialApi@getById');
Route::get('testimonial/delete/{id}', 'TestimonialApi@delete');
Route::post('testimonial/add', 'TestimonialApi@add');
Route::post('testimonial/update/{id}', 'TestimonialApi@update');
Route::get('testimonial/{limit?}/{offset?}/{lang?}', 'TestimonialApi@index');

#partner
Route::get('partner/getById/{id}/{lang?}', 'PartnerApi@getById');
Route::get('partner/delete/{id}', 'PartnerApi@delete');
Route::post('partner/add', 'PartnerApi@add');
Route::post('partner/update/{id}', 'PartnerApi@update');
Route::get('partner/{limit?}/{offset?}/{lang?}', 'PartnerApi@index');

#slider
Route::get('slider/getById/{id}/{lang?}', 'SliderApi@getById');
Route::get('slider/delete/{id}', 'SliderApi@delete');
Route::post('slider/add', 'SliderApi@add');
Route::post('slider/update/{id}', 'SliderApi@update');
Route::get('slider/{limit?}/{offset?}/{lang?}', 'SliderApi@index');