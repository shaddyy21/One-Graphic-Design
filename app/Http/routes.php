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

Route::get('packs/{id}/active', function ($id) {
    $pack = \App\Models\pack::find($id);
    $pack->active = "1";
    $pack->save();
    return redirect('admin#PackAd/'.$pack->id);
});

Route::get('packs/{id}/deactive', function ($id) {
    $pack = \App\Models\pack::find($id);
    $pack->active = "0";
    $pack->save();
    return redirect('admin#PackAd/'.$pack->id);
});




/*===========================================================================*/
/*                        Users Controller Mapping                           */
/*===========================================================================*/
    Route::resource('users','UsersController');
/*===========================================================================*/


/*===========================================================================*/
/*                        Packaging Controller Mapping                       */
/*===========================================================================*/
    Route::resource('pack','PacksController');
/*===========================================================================*/


/*===========================================================================*/
/*                        Logo Controller Mapping                           */
/*===========================================================================*/
    Route::resource('logo','LogosController');
/*===========================================================================*/

/*===========================================================================*/
/*                             Show login form                               */
/*===========================================================================*/
   Route::get('login', 'LoginController@showLoginForm');

/*===========================================================================*/


/*===========================================================================*/
/*                             Logs in the user                              */
/*===========================================================================*/
    Route::post('login', 'LoginController@processLoginForm');
/*===========================================================================*/


/*===========================================================================*/
/*                              Logs out user                                */
/*===========================================================================*/
    Route::get('logout', 'LoginController@logout');
/*===========================================================================*/