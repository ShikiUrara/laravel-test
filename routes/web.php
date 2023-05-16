<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
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
});
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

