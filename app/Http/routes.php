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

    $p="Welcome To Laravel";

    return view('welcome',["ha"=>$p,"ab"=>"Send To Email"]);
});


Route::get('/twiq', function () {
    return 'twiq';
})->name("twiq");

Route::get('/sa', function () {
    return view('saudi');
});

Route::get('/hanan', function () {
    return view('hanan.ha');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/phonedisplay', function () {

    $phone=[
  
        'Type' =>'iphone 14',
        'Price'=>3500 ,
        'Color'=>'black' , 
       ];
     
       return view('phonedetails',$phone);
});

Route::get('/oldphone', function () {
    return view('old.oldphone');
});

Route::get('/phone', function () {
    $phone=[
  
        ['Type' =>'Iphone 14','Price'=>3500 ,'Color'=>'Black'],
        ['Type' =>'Samsung','Price'=>2500 ,'Color'=>'White'],
        ['Type' =>'Huwaui','Price'=>1000 ,'Color'=>'Gold']
         
       ];
     
       
     
       return view('phone',["phone"=>$phone]);
});