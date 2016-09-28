<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {return view('pages.front-1');});

Route::get('/front-1', function () {return view('pages.front-1');});

Route::get('/front-2', function () {return view('pages.front-2');});

Route::get('/frnt3', function () {return view('pages.frnt3');});

Route::get('/frnt4', function () {return view('pages.frnt4');});

Route::get('/f5', function () {return view('pages.f5');});

Route::get('/f6', function () {return view('pages.f6');});

Route::get('/f7', function () {return view('pages.f7');});

Route::get('/f8', function () {return view('pages.f8');});

Route::get('/f9', function () {return view('pages.f9');});

Route::get('/f10', function () {return view('pages.f10');});

Route::get('/f11', function () {return view('pages.f11');});

Route::get('/f12', function () {return view('pages.f12');});
