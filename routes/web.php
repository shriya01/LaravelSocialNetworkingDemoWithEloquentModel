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

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('friendlist', ['as'=>'friendlist','uses'=>'UserController@getFriendList'])->middleware('verified');
Route::get('pendingrequests', ['as'=>'pendingrequests','uses'=>'UserController@showPendingRequests'])->middleware('verified');
Route::get('friendSuggestionList', ['as'=>'pendingrequests','uses'=>'UserController@friendSuggestionList'])->middleware('verified');
Route::get('viewposts', ['as'=>'viewposts','uses'=>'PostController@viewUserPosts'])->middleware('verified');
