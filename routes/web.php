<?php

Route::get('/', 'FrontEndController@index');
Route::get('/about', 'FrontEndController@about');
Route::get('membership', 'FrontEndController@membership');
Route::get('refreshCachToNewEditInFormaSite', 'FrontEndController@clearCache');

Route::get('/activity/{id}', 'ActivityController@activity');
Route::post('/activity/{id}', 'ActivityController@ActivityDetailsFilter');
Route::get('single/activity/{id}', 'ActivityController@singleActivityDetail');

Route::get('/newssubcategory/{id}', 'NewsController@AllNewsInSubCategory');
Route::get('/subcategory/{id}', 'NewsController@AllSubCategoryNews');
Route::get('/singlenews/{id}', 'NewsController@SingleNews');

Route::post('search/product', 'FilterProductController@productSearchByName');
Route::get('search/product', 'SportStoreController@shop');
Route::post('search/price', 'FilterProductController@productSearchByPrice');
Route::get('search/price', 'SportStoreController@shop');
Route::post('search/size', 'FilterProductController@productSearchBySize');
Route::get('search/size', 'SportStoreController@shop');
Route::post('search/color', 'FilterProductController@productSearchByColor');
Route::get('search/color', 'SportStoreController@shop');
Route::get('product/{id}', 'SportStoreController@product');

Route::get('onlinestore', 'SportStoreController@index');
Route::get('shop/cate/{id}', 'SportStoreController@cate');
Route::get('shop/subcate/{id}', 'SportStoreController@subcate');
Route::get('shop/subcategory/{id}', 'SportStoreController@subcate');
Route::get('shop/filter/{name}', 'SportStoreController@filter');

Route::get('removeItemFromCart/{id}','CartController@removeItem');
Route::post('cart/updates','CartController@cartUpdate');
Route::get('/wishlist/remove/{id}','WishlistController@removeItem');
Route::get('/compare/remove/{id}','CompareController@removeItem');
Route::resource('cart','CartController');
Route::resource('wishlist','WishlistController');
Route::resource('compare','CompareController');

Route::get('getFee/{id}', 'OrderController@getFee');
Route::post('checkout/process', 'OrderController@checkoutProcess');
Route::get('/checkout', 'OrderController@checkout');

Route::get('diets', 'DietController@diet');
Route::get('diet1/{name}', 'DietController@diet1');
Route::get('diet2/{name}', 'DietController@diet2');
Route::post('diet3', 'DietController@diet3');
Route::get('diet3', 'DietController@diet');
Route::post('diet4', 'DietController@diet4');
Route::get('diet4', 'DietController@diet');
Route::post('diet5', 'DietController@diet5');
Route::get('diet5', 'DietController@diet');
Route::post('diet6', 'DietController@diet6');
Route::get('diet6', 'DietController@diet');
Route::get('diet7/{name}', 'DietController@diet7');
Route::post('diet8', 'DietController@diet8');
Route::get('diet8', 'DietController@diet');
Route::post('/diet9', 'DietController@diet9');
Route::get('diet10/{name}', 'DietController@diet10');
Route::get('final', 'DietController@final');
Route::get('/delevery', 'DietController@delevery');
Route::post('send/delevery', 'DietController@saveDelveryRequest');
Route::get('client/diets', 'FrontEndController@diet');

Route::get('/customer/login', 'CustomerAuth\LoginController@showLoginForm')->name('login');
Route::get('/customer/register', 'CustomerAuth\RegisterController@showRegistrationForm')->name('register');
Route::post('/customer/login', 'CustomerAuth\LoginController@login');
Route::post('/customer/register', 'CustomerAuth\RegisterController@register');
Route::post('/customer/password/email', 'CustomerAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
Route::post('/customer/password/reset', 'CustomerAuth\ResetPasswordController@reset')->name('password.email');
Route::get('/customer/password/reset', 'CustomerAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
Route::get('/customer/password/reset/{token}', 'CustomerAuth\ResetPasswordController@showResetForm');

Route::group(['prefix' => 'customer','middleware' => ['web', 'customer']], function () {
  Route::get('/account', 'CustomerAuth\CustomerController@getProfile');
  Route::post('/account', 'CustomerAuth\CustomerController@saveProfile');
  Route::get('/orders', 'OrderController@getOrders');
  Route::get('/order/{id}', 'OrderController@getSingleOrder');
  Route::get('/logout', 'CustomerAuth\LoginController@logout');
});
