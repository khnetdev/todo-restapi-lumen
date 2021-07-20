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

$router->get('/', function () use ($router) {
    return "<h1>It's home</h1>";
});

$router->get('/todo', 'toDoController@index');
$router->get('/todo/{id}', 'toDoController@display');
$router->post('/todo/save', 'toDoController@save');
$router->post('/todo/{id}/update', 'toDoController@update');
$router->post('/todo/{id}/delete', 'toDoController@deleted');

