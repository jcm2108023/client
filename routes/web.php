<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//department Resources
/********************* department ***********************************************/
Route::resource('department','\App\Http\Controllers\DepartmentController');
Route::post('department/{id}/update','\App\Http\Controllers\DepartmentController@update');
Route::get('department/{id}/delete','\App\Http\Controllers\DepartmentController@destroy');
Route::get('department/{id}/deleteMsg','\App\Http\Controllers\DepartmentController@DeleteMsg');
/********************* department ***********************************************/


//jobtitle Resources
/********************* jobtitle ***********************************************/
Route::resource('jobtitle','\App\Http\Controllers\JobtitleController');
Route::post('jobtitle/{id}/update','\App\Http\Controllers\JobtitleController@update');
Route::get('jobtitle/{id}/delete','\App\Http\Controllers\JobtitleController@destroy');
Route::get('jobtitle/{id}/deleteMsg','\App\Http\Controllers\JobtitleController@DeleteMsg');
/********************* jobtitle ***********************************************/


//client Resources
/********************* client ***********************************************/
Route::resource('client','\App\Http\Controllers\ClientController');
Route::post('client/{id}/update','\App\Http\Controllers\ClientController@update');
Route::get('client/{id}/delete','\App\Http\Controllers\ClientController@destroy');
Route::get('client/{id}/deleteMsg','\App\Http\Controllers\ClientController@DeleteMsg');
/********************* client ***********************************************/


//purpose Resources
/********************* purpose ***********************************************/
Route::resource('purpose','\App\Http\Controllers\PurposeController');
Route::post('purpose/{id}/update','\App\Http\Controllers\PurposeController@update');
Route::get('purpose/{id}/delete','\App\Http\Controllers\PurposeController@destroy');
Route::get('purpose/{id}/deleteMsg','\App\Http\Controllers\PurposeController@DeleteMsg');
/********************* purpose ***********************************************/



//document Resources
/********************* document ***********************************************/
Route::resource('document','\App\Http\Controllers\DocumentController');
Route::post('document/{id}/update','\App\Http\Controllers\DocumentController@update');
Route::get('document/{id}/delete','\App\Http\Controllers\DocumentController@destroy');
Route::get('document/{id}/deleteMsg','\App\Http\Controllers\DocumentController@DeleteMsg');
/********************* document ***********************************************/


//track Resources
/********************* track ***********************************************/
Route::resource('track','\App\Http\Controllers\TrackController');
Route::post('track/{id}/update','\App\Http\Controllers\TrackController@update');
Route::get('track/{id}/delete','\App\Http\Controllers\TrackController@destroy');
Route::get('track/{id}/deleteMsg','\App\Http\Controllers\TrackController@DeleteMsg');
/********************* track ***********************************************/

