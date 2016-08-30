<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/demo',function(){
	return "test Routes";
});
Route::get('/login','DemoController@login');
Route::get('/views','ViewController@getReturn');
Route::get('/data', function()
{
    return view('passdata',['email'=>'caotung@gmail.com','username'=>'MrBuzz'],['nickname'=>'Buzz']);
});
Route::get('/admin','UsersController@listuser');
