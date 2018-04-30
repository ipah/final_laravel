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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');


Route::get('/signup', 'SignupController@index'); //shows view for user to sign up
Route::post('/signup', 'SignupController@signup');//processes user sign up

Route::get('/profile', 'AdminController@index');


Route::get('/professors', 'ProfessorsController@index');

Route::post('/professors', 'ProfessorsController@add');

Route::get('/posts/{id}/reviews', 'ProfessorsController@showReviews');
Route::get('/posts/{id}/write', 'ProfessorsController@write');
Route::post('/posts/{id}/reviews/new', 'ProfessorsController@storeReviews');

Route::get('/myreviews', 'PostController@myPosts');

Route::get('/delete/{id}', 'PostController@delete');
Route::get('/edit/{id}', 'PostController@edit');
Route::post('/edit/{id}', 'PostController@updatePost');
