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

//$router->get('/', function(){ return "Assalamaualaikum..."; });

$router->get('/home', function(){ return view('home');});
$router->get('/barang', function(){ return view('barang_dijual');});
$router->get('/warung', function(){ return view('warung');});

//=========================USET====================================
$router->get('/showuser', 'AuthController@show');
$router->get('/hapususer/{id}', 'AuthController@delete');
$router->post('/register', 'AuthController@regist');
$router->post('/login', 'AuthController@login');
//=========================WARUNG==================================
$router->get('/showwarung', 'WarungController@showall');
$router->get('/findwarung/{id}', 'WarungController@find');
$router->post('/tambahwarung', 'WarungController@insert');
$router->put('/updatewarung/{id}', 'WarungController@update');
$router->get('/hapuswarung/{id}', 'WarungController@delete');
//=========================KATEGORI================================
$router->get('/showkategori', 'KategoriController@showall');
$router->get('/findkategori/{id}', 'KategoriController@find');
$router->post('/tambahkategori', 'KategoriController@insert');
$router->put('/updatekategori/{id}', 'KategoriController@update');
$router->get('/hapuskategori/{id}', 'KategoriController@delete');
//=========================BARANG==================================
$router->get('/showbarang', 'KategoriController@showall');
$router->get('/findbarang/{id}', 'KategoriController@find');
$router->post('/tambahbarang', 'KategoriController@insert');
$router->put('/updatebarang/{id}', 'KategoriController@update');
$router->get('/hapusbarang/{id}', 'KategoriController@delete');
//================================================================