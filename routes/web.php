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

Route::get('/home', 'HomeController@index')->name('home');


// ////////////////////////TEST//////////////////////////

// http://localhost/newsapp_api/public/categories

// Route::get('/categories', function () {
//     return \App\category::all();
// });

// http://localhost/newsapp_api/public/user(50)

// Route::get('/user(50)', function () {
//     return \App\User::find(50);
// });

// http://localhost/newsapp_api/public/user(50)comments
// Route::get('/user(50)comments', function () {
//     return \App\User::find(50)->comments;
// });