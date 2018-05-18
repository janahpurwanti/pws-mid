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

$app->get('/', function () use ($app) {
    return $app->version();
});
$app->get('/todo', 'katcontroller@index');
$app->get('/todo/{id}', 'katcontroller@show');
$app->post('/todo', 'katcontroller@store');
$app->put('/todo/{id}', 'katcontroller@update');
$app->delete('/todo/{id}', 'katcontroller@destroy');


$app->get('/', function () use ($app) {
    return $app->version();
});
$app->get('/tidi', 'katcontroller@index');
$app->get('/tidi/{kode}', 'katcontroller@show');
$app->post('/tidi', 'katcontroller@storebuku');
$app->put('/tidi/{kode}', 'katcontroller@update');
$app->delete('/tidi/{kode}', 'katcontroller@destroy');