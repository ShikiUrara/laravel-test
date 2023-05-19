<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Login2Controller;
use App\Http\Controllers\ProductAddController;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name(name:"homepage")->middleware("MiddlewareTest");
Route::get('/a', function () {
    return view('a');
})->name(name:"a");

Route::get('/test/{id}', function ($id) {
    return 'welcome '.$id.' <br/> 1';
});

Route::resource('abc', TestController::class , ['except' => ['index']]);

Route::group(['prefix' => 'admin'], function () {
    Route::get('users', function () {
       // route nay se co duong dan là admin/users
       return "hihi";
    });
});

Route::get('thongtin/{ten}', function ( $ten) {
    return "hello $ten";
 })->where([ 'ten' => '[0-9]+']);

Route::get("login2", [Login2Controller::class,"login2"])->name(name:"login2");
Route::post("login2", [Login2Controller::class,"login2post"]);

Route::group(['prefix' => 'product'], function () {
    Route::get('add', [ProductAddController::class, "addProduct"])->name(name:"addProduct") ;
    Route::get('all', [ProductAddController::class, "allProduct"])->name(name:"allProduct") ;
    Route::post('add', [ProductAddController::class, "ProductPost"]);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
