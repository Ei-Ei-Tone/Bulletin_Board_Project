<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;

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

Auth::routes();

//Home Page
Route::get('/home','App\Http\Controllers\PostController@index')->name('home');
Route::post('/export','App\Http\Controllers\PostController@exportFile')->name('export');

//Group Posts
Route::group(['prefix' => 'posts'], function() {
  //create post
  Route::get('/create','App\Http\Controllers\PostController@createPost');
  Route::post('/store','App\Http\Controllers\PostController@store');
  
  //create confirm post
  Route::post('/confirm','App\Http\Controllers\PostController@addPost');

  //update post
  Route::get('/update/{id}','App\Http\Controllers\PostController@updateShow');
  Route::post('/updatePost','App\Http\Controllers\PostController@updatePost');

  //update confirm post
  Route::post('/updateConfirm','App\Http\Controllers\PostController@updateConfirmPost')->name('update');
  
  //impot file
  Route::get('/importFile','App\Http\Controllers\PostController@importFile');
  Route::post('/import','App\Http\Controllers\PostController@import')->name('import');

  //delete post
  Route::delete('/delete/{id}','App\Http\Controllers\PostController@destroy')->name('posts.destroy');

  //search by title and description
  Route::post('/search','App\Http\Controllers\PostController@search');
});

//Group User
Route::group(['prefix' => 'user'], function () {
  //get user list
  Route::get('/userList','App\Http\Controllers\UserController@getUserList');
  
  //create user
  Route::get('/create','App\Http\Controllers\UserController@createUser');
  Route::post('/store','App\Http\Controllers\UserController@store');

  //create confirm user
  Route::post('/confirm','App\Http\Controllers\UserController@confirmUser');

  //For User Delete
  Route::delete('/delete/{id}','App\Http\Controllers\UserController@destroy');

  //create user profile
  Route::get('/showProfile/{id}','App\Http\Controllers\UserController@showProfile');
  
  //update user profile
  Route::get('/showUpdateProfile/{id}','App\Http\Controllers\UserController@showUpdateProfile');
  
  //confirm user profile
  Route::post('/confirmProfile/{id}','App\Http\Controllers\UserController@confirmProfile');

  //add user profile to DB
  Route::post('/addProfile','App\Http\Controllers\UserController@addProfile');
  
  //change password
  Route::get('/changePassword/{id}','App\Http\Controllers\UserController@changePassword');
  Route::post('/addPassword','App\Http\Controllers\UserController@addPassword');

  //Search By name, email , formDate and toDate
  Route::post('/search','App\Http\Controllers\UserController@search');
});