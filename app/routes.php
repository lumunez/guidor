<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('mail', function (){
   //Mail::send(view,data,callback(message option))
   Mail::send('message', array('name'=>'Luis','email'=>'test.manif@gmail.com'), function($message) {
      $message->to('luis@manifiesto.biz','Luis Manifiesto')->subject('Hello');
   });
});

Route::post('add', 'HomeController@add');
Route::get('contact', 'HomeController@contact');
Route::get('news', 'HomeController@news');
Route::get('gracias', 'HomeController@gracias');


