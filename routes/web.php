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

$router->group(["prefix" => "item"], function() use ($router){

	//Create item route
	$router->post('create', ["as" => "item.create", "uses" => "ItemController@create"]);
	
	//Mark item route
	$router->put('mark/{id}', ["as" => "item.mark", "uses" => "ItemController@mark"]);

	//Delete item route
	$router->delete('delete/{id}', ["as" => "item.delete", "uses" => "ItemController@delete"]);

	//View item route
	$router->get('view/{id}', ["as" => "item.view", "uses" => "ItemController@view"]);

	//List item route
	$router->post('list', ["as" => "item.list", "uses" => "ItemController@list"]);
});
