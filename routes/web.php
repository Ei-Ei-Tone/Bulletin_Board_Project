<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'posts'], function () {
  Route::get('/','App\Http\Controllers\PostController@index');

  Route::get('/create','App\Http\Controllers\PostController@createPost');
  Route::post('/store','App\Http\Controllers\PostController@store');

  // Route::get('/confirm','App\Http\Controllers\PostController@confirmPost');
  Route::post('/confirm','App\Http\Controllers\PostController@addPost');

  Route::get('/update','App\Http\Controllers\PostController@updatePost');
  Route::get('/updateConfirm','App\Http\Controllers\PostController@updateConfirmPost');
  Route::get('/uploadFile','App\Http\Controllers\PostController@uploadFile');
});
//POST
// Route::get('/posts','App\Http\Controllers\PostController@index');


//create post


//create confirm post


//update post


//update confirm post


//create user
Route::get('/createUser','App\Http\Controllers\UserController@createUser');
//create confirm user
Route::get('/confirmUser','App\Http\Controllers\UserController@confirmUser');

//create user profile
Route::get('/userProfile','App\Http\Controllers\UserController@userProfile');

//update user profile
Route::get('/updateProfile','App\Http\Controllers\UserController@updateProfile');

//update user profile
Route::get('/confirmProfile','App\Http\Controllers\UserController@confirmProfile');

//change password
Route::get('/changePassword','App\Http\Controllers\UserController@changePassword');

//Upload CSV File
