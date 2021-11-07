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


//TOPページルート
Route::get('/',"Top\IndexController@index")->name("index");

//ccardルート
Route::get('/ccard/',"CCard\IndexController@index")->name("index");
Route::post('/ccard/',"CCard\GenerateController@index")->name("generate");

//MovieSearchルート
Route::get('/moviesearch/',"MovieSearch\IndexController@index")->name("index");