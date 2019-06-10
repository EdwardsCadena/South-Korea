<?php

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

Route::get('/',["as"=>"route.index","uses"=>"SouthkoreaController@home"] );
Route::get('fedding',["as"=>"route.food","uses"=>"SouthkoreaController@fedding"] );
Route::get('monuments',["as"=>"route.visit","uses"=>"SouthkoreaController@monuments"] );
