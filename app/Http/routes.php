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

/*
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/

use App\Models\Article;
use App\Models\User;

Route::get('/', function() {

	$articles = Article::all();

	return View::make('articles')->with('articles', $articles);
});

Route::get('/profile/{username}', function($username) {

	$user = User::where('name', $username)->firstOrFail();

	return View::make('profile')->with('user', $user);
});


Route::get('/article/count', function() {

	return Article::all()->count();
});