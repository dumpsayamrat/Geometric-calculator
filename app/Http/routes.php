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

$app->get('/', function () {
    return view('index', ['name' => 'James']);
});

$app->get('/scalene-rectangle', function () {
    return view('g1');
});

$app->get('/circle', function () {
    return view('g2');
});

$app->get('/kite', function () {
    return view('g3');
});

$app->get('/parallelogram', function () {
    return view('g4');
});

$app->get('/rhombus', function () {
    return view('g5');
});

$app->get('/square', function () {
    return view('g6');
});

$app->get('/rectangle', function () {
    return view('g7');
});

$app->get('/triangle', function () {
    return view('g8');
});

$app->get('/heart', function () {
    return view('g9');
});