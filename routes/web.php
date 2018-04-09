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

Route::group(
        ['namespace' => 'admin', 'prefix' => 'admin', 'middleware' => ['auth']]
        , function () {
    Route::get('/', "AdminController@index");

    // articles routes
    Route::get('/articles', "ArticlesController@index");
    Route::get('/articles/create', "ArticlesController@create");
    Route::post('/articles/store', "ArticlesController@store");
    Route::get('/articles/edit/{id}', "ArticlesController@edit");
    Route::post('/articles/update/{id}', "ArticlesController@update");
    Route::get('/articles/show/{id}', "ArticlesController@show");
    Route::get('/articles/destroy/{id}', "ArticlesController@destroy");
    // end articles
    //
    // categories routes
    Route::get('/categories', "CategoriesController@index");
    Route::get('/categories/create', "CategoriesController@create");
    Route::post('/categories/store', "CategoriesController@store");
    Route::get('/categories/edit/{id}', "CategoriesController@edit");
    Route::post('/categories/update/{id}', "CategoriesController@update");
    Route::get('/categories/show/{id}', "CategoriesController@show");
    Route::get('/categories/destroy/{id}', "CategoriesController@destroy");
    // end categories
});

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/articles/details/{id}/{title}', 'HomeController@article_details');

Route::post("/add_comment", "HomeController@comment");
Route::get('/filter/{id}', "HomeController@filter");
