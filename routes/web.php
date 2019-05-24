<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
      return view('welcome'); //welcome.blade.php
});
Route::get('about', function(){
  //passing variable in views
  $karkhana = ['this', 'is', 'quiz','site'];
  return view('about')->withname($karkhana);
});*/
route::get('/','homeController@index');
route::get('about','homeController@about');
route::resource('songs','songsController');
