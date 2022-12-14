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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/abc','userRegistration@index');
Route::get('/login','user\homeController@userlogins');

Route::get('/aaa','userRegistration@index');
Route::get('/logins','user\homeController@userlogin');

Route::get('/practice','user\homeController@practice');

Route::resources([
	'reg'=>'userRegistration',
]);
