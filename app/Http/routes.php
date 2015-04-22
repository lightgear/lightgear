<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

$router->get('/', 'WelcomeController@index');
$router->get('/home', 'HomeController@index');


// protected routes

$router->group(['middleware' => 'auth'], function ($router) {
    $router->resource('pages', 'Content\Pages', ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
});

$router->resource('pages', 'Content\Pages', ['only' => ['index', 'show']]);

/*
|--------------------------------------------------------------------------
| Authentication & Password Reset Controllers
|--------------------------------------------------------------------------
|
| These two controllers handle the authentication of the users of your
| application, as well as the functions necessary for resetting the
| passwords for your users. You may modify or remove these files.
|
*/

$router->controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
