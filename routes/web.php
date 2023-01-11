<?php

use App\Http\Controllers\Web\AdminController;
use App\Http\Middleware\AdminMiddleware;
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

Route::get('/{any}', function () {
    
    return view('welcome');
    
})->where("any" , "^(?!admin).*");


Route::group(["controller" => AdminController::class] ,function(){


    Route::group(["middleware" => ["guest:admin"]] , function(){

        Route::get('/adminlogin ', 'loginShow');

        Route::post('/adminlogin ', 'login');

    });
    
    Route::group(["middleware" => AdminMiddleware::class] , function(){

    Route::get('/adminpanel ', 'panel');

    });


});
