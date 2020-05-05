<?php

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/





/**
 * @User related
 */

Route::get('/authors','Api\userController@index');
Route::get('/author/{id}','Api\userController@show');
Route::get('/posts/author/{id}','Api\userController@posts');
Route::get('/comments/author/{id}','Api\userController@comments');

// end user related

/**
 * @Category related 
 */

Route::get('/categories','Api\CategoryController@index');
Route::get('/category/{id}','Api\CategoryController@show');
Route::get('/posts/category/{id}','Api\CategoryController@posts');

// end category related


/**
 * @Post related 
 */

Route::get('/posts','Api\PostController@index');
Route::get('/post/{id}','Api\PostController@show');
Route::get('/comments/post/{id}','Api\PostController@comments');

// end Post related


/**
 * @Comment related 
 */

Route::get('/comments','Api\CommentController@index');

// end Comment related

route::post('/register','Api\UserController@store');
route::post('/token','Api\UserController@getToken');




Route::middleware('auth:api')->group( function(){
    
    Route::post('/update-user/{id}', 'Api\UserController@update');

    Route::post('/posts','Api\PostController@store');
    Route::post('/post/{id}','Api\PostController@update');
    Route::delete('/post/{id}', 'Api\PostController@destroy');

    Route::post('/comment/post/{id}','Api\CommentController@store');


});
