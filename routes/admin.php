<?php
// Ajax
// User
Route::get('/loadUserData', 'UserController@loadData')->name('admin.user.data');

// Page
Route::get('/loadPageData', 'PageController@loadData')->name('admin.page.data');

// Slider
Route::get('/loadSliderData', 'SliderController@loadData')->name('admin.slider.data');

// Menu
Route::get('/loadMenuData', 'MenuController@loadData')->name('admin.menu.data');

// Contact
Route::get('/loadContactData', 'ContactController@loadData')->name('admin.contact.data');

// Categories
Route::get('/loadCategoryData', 'CategoryController@loadData')->name('admin.category.data');

// Brands
Route::get('/loadBrandData', 'BrandController@loadData')->name('admin.brand.data');

// Load
Route::get('/', 'HomeController@index')->name('admin.home');

// Settings
Route::get('/setting', 'SettingController@index')->name('setting.index');
Route::post('/setting', 'SettingController@update')->name('setting.update');

// User
Route::resource('/user', 'UserController');
Route::get('user/{id}/delete', 'UserController@confirmation')->name('user.delete');
Route::PATCH('user/{id}/password', 'UserController@password')->name('user.password');

// Page
Route::resource('/page', 'PageController');
Route::get('page/{id}/delete', 'PageController@confirmation')->name('page.delete');

// Slider
Route::resource('/slider', 'SliderController');
Route::get('slider/{id}/delete', 'SliderController@confirmation')->name('slider.delete');

// Menu
Route::resource('/menu', 'MenuController');
Route::get('menu/{id}/delete', 'MenuController@confirmation')->name('menu.delete');

// Contact
Route::resource('/contact', 'ContactController', ['only' => ['index', 'show', 'destroy']]);
Route::get('contact/{id}/delete', 'ContactController@confirmation')->name('contact.delete');

// Category
Route::resource('/category', 'CategoryController');
Route::get('category/{id}/delete', 'CategoryController@confirmation')->name('category.delete');

// Brand
Route::resource('/brand', 'BrandController');
Route::get('brand/{id}/delete', 'BrandController@confirmation')->name('brand.delete');