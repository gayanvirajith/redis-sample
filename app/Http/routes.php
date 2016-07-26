<?php

use Illuminate\Support\Facades\Redis;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controllenr to call when that URI is requested.
|
*/

Route::get('/', function () {

	Redis::set('name', 'Gayan');
	return Redis::get('name');
    return view('welcome');
});
