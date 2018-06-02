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




$router->get('login', function (){
    return view('admin.login');
});
$router->post('admin/dologin', 'AdminController@dologin');
$router->get('admin/home', 'AdminController@home');
$router->get('admin/index', 'AdminController@index');
$router->get('findincluded', 'SpiderController@findincluded');

$router->get('/', 'MuluController@index');
$router->get('/{one}', 'MuluController@index');
$router->get('/{one}/{two}', 'MuluController@index');

