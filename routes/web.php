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


// Route::get('/hello', function () {
//     return 'Hello World!';
// });
// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return 'This is user <b> '.$name.'</b> with an id of <b>'.$id.'</b>';
// });

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/about', function () {
//     return view('pages/about');
// });

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/rulesregulations', 'PagesController@rulesregulations');

Route::get('/academics', 'PagesController@academics');

Route::get('/beyondcurriculum', 'PagesController@beyondcurriculum');

Route::get('/planner', 'PagesController@planner');

Route::get('/achievements', 'PagesController@achievements');

Route::get('/circularsnews', 'PagesController@circularsnews');

Route::get('/photogallery', 'PagesController@photogallery');

Route::get('/contactus', 'PagesController@contactus');


Route::resource('posts', 'PostsController');