<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->group(['prefix' => 'api/v1','namespace' => 'Api\V1'], function () use ($router) {

	// Router API Login
	// $router->post('login', 'UserController@login');
	

	// Router API Brand
	$router->get('brands','BrandController@index');
	$router->post('brands','BrandController@store');
	$router->get('brands/{id}','BrandController@show');
	$router->put('brands/{id}','BrandController@update');
	$router->delete('brands/{id}','BrandController@destroy');

	// Router API Category
	$router->get('categories','CategoryController@index');
	$router->post('categories','CategoryController@store');
	$router->get('categories/{id}','CategoryController@show');
	$router->put('categories/{id}','CategoryController@update');
	$router->delete('categories/{id}','CategoryController@destroy');

	// Router API Location
	$router->get('locations','LocationController@index');
	$router->post('locations','LocationController@store');
	$router->get('locations/{id}','LocationController@show');
	$router->put('locations/{id}','LocationController@update');
	$router->delete('locations/{id}','LocationController@destroy');


	// Router API Product
	$router->get('products','ProductController@index');
	$router->post('products','ProductController@store');
	$router->get('products/{id}','ProductController@show');
	$router->put('products/{id}','ProductController@update');
	$router->delete('products/{id}','ProductController@destroy');


});

