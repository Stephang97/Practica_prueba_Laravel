<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//operaciones get
Route::get("confApiGET","App\Http\Controllers\ConfigurationController@index");
Route::get("peopleApiGET","App\Http\Controllers\PeopleController@index");
Route::get("roleApiGET","App\Http\Controllers\RoleController@index");

//operaciones post
Route::post("confApiPOST","App\Http\Controllers\ConfigurationController@store");
Route::post("peopleApiPOST","App\Http\Controllers\PeopleController@store");
Route::post("roleApiPOST","App\Http\Controllers\RoleController@store");

//operaciones patch
Route::patch("confApiPATCH/{id}","App\Http\Controllers\ConfigurationController@update");
Route::patch("peopleApiPATCH/{id}","App\Http\Controllers\PeopleController@update");
Route::patch("roleApiPATCH/{id}","App\Http\Controllers\RoleController@update");

//operaciones delete
Route::delete("confApiDELETE/{id}","App\Http\Controllers\ConfigurationController@destroy");
Route::delete("peopleApiDELETE/{id}","App\Http\Controllers\PeopleController@destroy");
Route::delete("roleApiDELETE/{id}","App\Http\Controllers\RoleController@destroy");
