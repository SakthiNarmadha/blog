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

//routing to controler

Route::get('/post/{slug}', 'PostController@index');

//view layout

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about',[
    'articles' => App\Article::latest()->get()
    ]);
    
});
Route::get('/articles', 'ArticlesController@index');
//form handling
Route::get('/articles/create', 'ArticlesController@create');
Route::post('/articles','ArticlesController@store');
//render dynamic data part2
Route::get('/articles/{article}', 'ArticlesController@show');
//forms that submit PUT requests
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');
//for authentication
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')
->middleware('auth')->only(['store','update']);


//GET,POST,PUT,PATCH,DELETE

// GET/videos
// POST/videos
// GET/videos/2
// DELETE/videos/2
// PUT/videos/2
















Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
