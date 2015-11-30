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

/*=========================================================*/
/*               Pack Activate and Deactivate              */
/*=========================================================*/
    Route::get('packs/{id}/active', function ($id) {
        $pack = \App\Models\Pack::find($id);
        $pack->active = "1";
        $pack->save();
        return redirect('admin#PackAd');
    });

    Route::get('packs/{id}/deactive', function ($id) {
        $pack = \App\Models\Pack::find($id);
        $pack->active = "0";
        $pack->save();
        return redirect('admin#PackAd');
    });
/*=========================================================*/


/*=========================================================*/
/*               Logo Activate and Deactivate              */
/*=========================================================*/
    Route::get('logos/{id}/active', function ($id) {
        $logo = \App\Models\Logo::find($id);
        $logo->active = "1";
        $logo->save();
        return redirect('admin#LogoAd');
    });

    Route::get('logos/{id}/deactive', function ($id) {
        $logo = \App\Models\Logo::find($id);
        $logo->active = "0";
        $logo->save();
        return redirect('admin#LogoAd');
    });
/*=========================================================*/


/*=========================================================*/
/*               Paper Activate and Deactivate              */
/*=========================================================*/
    Route::get('papers/{id}/active', function ($id) {
        $paper = \App\Models\Paper::find($id);
        $paper->active = "1";
        $paper->save();
        return redirect('admin#PaperAd');
    });

    Route::get('papers/{id}/deactive', function ($id) {
        $paper = \App\Models\Paper::find($id);
        $paper->active = "0";
        $paper->save();
        return redirect('admin#PaperAd');
    });
/*=========================================================*/


Route::post("sendmail",function(){
    
    //Send email using Laravel send function
    
    $data = Request::all();
    $rules = [
            "name" => "required",
            "emailC" => "required|email",
            "subject" => "required",
            "content" => "required"
        ];
    
    $validator = Validator::make($data,$rules);
    
    if ($validator->fails())
    {
        // The given data did not pass validation
        return redirect("/#Contact")->withErrors($validator)->withInput();
    }
    
    
    
    Mail::send('viewMail', $data, function($message){
        //email 'From' field: Get users email add and name
        $message->from("admin@gmail.com" , "Admin");
        //email 'To' field: cahnge this to emails that you want to be notified.                    
        $message->to('shadrak_anthony@yahoo.co.nz', 'One Graphic Design')->subject('contact request');
    });
    
    return redirect('/');
});

/*===========================================================================*/
/*                        Users Controller Mapping                           */
/*===========================================================================*/
    Route::resource('user','UsersController');
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
/*                        Paper Controller Mapping                           */
/*===========================================================================*/
    Route::resource('paper','PapersController');
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