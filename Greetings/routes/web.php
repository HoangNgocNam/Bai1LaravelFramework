<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/greetings/{name?}', function ($name = null) {
//    if ($name){
//        echo" Hello ". $name .'!';
//    } else{
//        echo 'Hello word';
//    }
//    echo" Hello Word! ";
//    return view('welcome');
//});
Route::get('/',function (){
    return view('helloword1');
});
