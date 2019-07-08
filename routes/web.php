<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => 'api'], function () use ($router) {
  
	$router->get('register',  ['uses' => 'UserController@getRegister']);
  	$router->post('register',  ['uses' => 'UserController@register']);

  	$router->post('login', ['uses' => 'UserController@login']);
  	$router->get('login', ['uses' => 'UserController@getLogin']);

  	$router->get('jobs', ['uses' => 'UserController@jobs']);

	$router->get('users', ['uses' => 'UserController@getUsers']);

  	// $router->put('users/{id}', ['uses' => 'UserController@update']);

  
});