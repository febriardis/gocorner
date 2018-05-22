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

//$router->get('/', function () use ($router) {
//    return $router->app->version();
//});

//===========================================================
$router->get('/showuser', 'AuthController@show');
$router->delete('/hapususer/{id}', 'AuthController@delete');
$router->post('/register', 'AuthController@regist');
$router->post('/login', 'AuthController@login');
//===========================================================
$router->get('/showwarung', 'WarungController@showall');
$router->get('/findwarung/{id}', 'WarungController@find');
$router->post('/tambahwarung', 'WarungController@insert');
$router->put('/updatewarung/{id}', 'WarungController@update');
$router->delete('/hapuswarung/{id}', 'WarungController@delete');

$router->get('/', function(){
	return "HAI";
});