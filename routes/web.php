<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Products Index
Route::get('/products', 'ProductController@indexProducts') -> name('products.index');

// Products Show
Route::get('/products/{id}/show', 'ProductController@showProducts') -> name('products.show');

// Products Create
Route::get('/products/create', 'ProductController@createProducts') -> name('products.create');
Route::post('/products/store', 'ProductController@storeProducts') -> name('products.store');

// Products Edit
Route::get('/products/{id}/edit', 'ProductController@editProducts') -> name('products.edit');
Route::post('/products/{id}/update', 'ProductController@updateProducts') -> name('products.update');

// Products Delete
Route::get('/products/{id}/destroy', 'ProductController@destroyProducts') -> name('products.destroy');

// Mail
Route::get('/mailable', function() {
  $user = App\User::inRandomOrder() -> first();
  $prod = App\Product::inRandomOrder() -> first();
  $action = "DELETE";

  return new App\Mail\UserAction($user, $prod, $action);
});
