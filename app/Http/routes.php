<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\User;
use Illuminate\Support\Facades\Input;

Route::group(['middleware' => 'auth'], function (){

    Route::get('/home', 'HomeController@index');
    Route::resource('admin/users', 'AdminUsersController');
    Route::resource('admin/posts', 'AdminPostsController');
    Route::resource('admin/comments', 'PostCommentController');
    Route::get('/post/{id}', [ 'as' => 'home.post', 'uses' => 'AdminPostsController@show']);
    Route::get('/posts', [ 'as' => 'all.posts', 'uses' => 'AdminPostsController@posts']);
    Route::get('/user/{id}', [ 'as' => 'user.profile', 'uses' => 'AdminUsersController@user']);
    Route::post('/search', 'SearchController@search');
});


Route::auth();

Route::resource('users/posts', 'UserPostsController');

Route::get('/', 'WelcomeController@welcome');


Route::get('/auth/facebook', 'FacebookController@redirectToProvider')->name('facebook.login');
Route::get('/auth/facebook/callback', 'FacebookController@handleProviderCallback');

Route::get('/login/google', 'GoogleController@redirectToProvider')->name('google.login');
Route::get('/login/google/callback', 'GoogleController@handleProviderCallback');