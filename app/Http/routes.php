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

Route::get('/', function () {
    return view('template/main');
});

//Route::get('admin', function () {
//    return view('template/form');
//});

Route::get('admin', function () {
    return view('template/admin');
});


Route::get('createPaper',function(){
    return view('createPaper');
});
