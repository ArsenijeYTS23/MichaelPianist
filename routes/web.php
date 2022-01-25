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

//Route::get('/', function () {
//    
//   
//    $task= "arsa";
//    
//    
//    return view('index', compact('task'));
//});
Route::get('/', 'HomeController@index');
Route::get('/16a0ff90XX1PPPcasfgfdd', 'MessagesController@index');
Route::post('newsletter', 'HomeController@newsletter');
Route::post('message', 'HomeController@message');
Route::get('de', 'HomeController@de');
Route::get('es', 'HomeController@es');
