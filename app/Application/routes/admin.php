<?php
Route::get('icons', 'HomeController@icons');
Route::get('docs', 'HomeController@apiDocs');
#### user control
Route::get('user', 'UserController@index');
Route::get('user/item/{id?}', 'UserController@show');
Route::post('user/item', 'UserController@store');
Route::post('user/item/{id}', 'UserController@update');
Route::get('user/{id}/delete', 'UserController@destroy');
Route::get('user/{id}/view', 'UserController@getById');
#### group control
Route::get('group', 'GroupController@index');
Route::get('group/item/{id?}', 'GroupController@show');
Route::post('group/item', 'GroupController@store');
Route::post('group/item/{id}', 'GroupController@update');
Route::get('group/{id}/delete', 'GroupController@destroy');
Route::get('group/{id}/view', 'GroupController@getById');
#### role control
Route::get('role', 'RoleController@index');
Route::get('role/item/{id?}', 'RoleController@show');
Route::post('role/item', 'RoleController@store');
Route::post('role/item/{id}', 'RoleController@update');
Route::get('role/{id}/delete', 'RoleController@destroy');
Route::get('role/{id}/view', 'RoleController@getById');
#### permission control
Route::get('permission', 'PermissionController@index');
Route::get('permission/item/{id?}', 'PermissionController@show');
Route::post('permission/item', 'PermissionController@store');
Route::post('permission/item/{id}', 'PermissionController@update');
Route::get('permission/{id}/delete', 'PermissionController@destroy');
Route::get('permission/{id}/view', 'PermissionController@getById');
#### home control
Route::get('home/{pages?}/{limit?}', 'HomeController@index');
#### setting control
Route::get('setting', 'SettingController@index');
Route::get('setting/item/{id?}', 'SettingController@show');
Route::post('setting/item', 'SettingController@store');
Route::post('setting/item/{id}', 'SettingController@update');
Route::get('setting/{id}/delete', 'SettingController@destroy');
Route::get('setting/{id}/view', 'SettingController@getById');
#### menu control
Route::get('menu', 'MenuController@index');
Route::get('menu/item/{id?}', 'MenuController@show');
Route::post('menu/item', 'MenuController@store');
Route::post('menu/item/{id}', 'MenuController@update');
Route::get('menu/{id}/delete', 'MenuController@destroy');
Route::get('menu/{id}/view', 'MenuController@getById');
Route::post('update/menuItem', 'MenuController@menuItem');
Route::post('addNewItemToMenu', 'MenuController@addNewItemToMenu');
Route::get('deleteMenuItem/{id}', 'MenuController@deleteMenuItem');
Route::get('getItemInfo/{id}', 'MenuController@getItemInfo');
Route::post('updateOneMenuItem', 'MenuController@updateOneMenuItem');
#### page control
Route::get('page', 'PageController@index');
Route::get('page/item/{id?}', 'PageController@show');
Route::post('page/item', 'PageController@store');
Route::post('page/item/{id}', 'PageController@update');
Route::get('page/{id}/delete', 'PageController@destroy');
Route::get('page/{id}/view', 'PageController@getById');
#### log control
Route::get('log', 'LogController@index');
Route::get('log/item/{id?}', 'LogController@show');
Route::post('log/item', 'LogController@store');
Route::post('log/item/{id}', 'LogController@update');
Route::get('log/{id}/delete', 'LogController@destroy');
Route::get('log/{id}/view', 'LogController@getById');
#### categorie control
Route::get('categorie', 'CategorieController@index');
Route::get('categorie/item/{id?}', 'CategorieController@show');
Route::post('categorie/item', 'CategorieController@store');
Route::post('categorie/item/{id}', 'CategorieController@update');
Route::get('categorie/{id}/delete', 'CategorieController@destroy');
Route::get('categorie/{id}/view', 'CategorieController@getById');
#### contact control
Route::get('contact', 'ContactController@index');
Route::get('contact/item/{id?}', 'ContactController@show');
Route::post('contact/item', 'ContactController@store');
Route::post('contact/item/{id}', 'ContactController@update');
Route::get('contact/{id}/delete', 'ContactController@destroy');
Route::get('contact/{id}/view', 'ContactController@getById');
Route::post('contact/replay/{id}', 'ContactController@replayEmail');


    #### services control
    Route::get('services' , 'ServicesController@index');
    Route::get('services/item/{id?}' , 'ServicesController@show');
    Route::post('services/item' , 'ServicesController@store');
     Route::post('services/item/{id}' , 'ServicesController@update');
    Route::get('services/{id}/delete' , 'ServicesController@destroy');
    Route::get('services/{id}/view' , 'ServicesController@getById');
    #### product control
    Route::get('product' , 'ProductController@index');
    Route::get('product/item/{id?}' , 'ProductController@show');
    Route::post('product/item' , 'ProductController@store');
     Route::post('product/item/{id}' , 'ProductController@update');
    Route::get('product/{id}/delete' , 'ProductController@destroy');
    Route::get('product/{id}/view' , 'ProductController@getById');
    #### testimonial control
    Route::get('testimonial' , 'TestimonialController@index');
    Route::get('testimonial/item/{id?}' , 'TestimonialController@show');
    Route::post('testimonial/item' , 'TestimonialController@store');
     Route::post('testimonial/item/{id}' , 'TestimonialController@update');
    Route::get('testimonial/{id}/delete' , 'TestimonialController@destroy');
    Route::get('testimonial/{id}/view' , 'TestimonialController@getById');
    #### partner control
    Route::get('partner' , 'PartnerController@index');
    Route::get('partner/item/{id?}' , 'PartnerController@show');
    Route::post('partner/item' , 'PartnerController@store');
     Route::post('partner/item/{id}' , 'PartnerController@update');
    Route::get('partner/{id}/delete' , 'PartnerController@destroy');
    Route::get('partner/{id}/view' , 'PartnerController@getById');
    #### slider control
    Route::get('slider' , 'SliderController@index');
    Route::get('slider/item/{id?}' , 'SliderController@show');
    Route::post('slider/item' , 'SliderController@store');
     Route::post('slider/item/{id}' , 'SliderController@update');
    Route::get('slider/{id}/delete' , 'SliderController@destroy');
    Route::get('slider/{id}/view' , 'SliderController@getById');