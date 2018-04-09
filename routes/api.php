<?php

use Illuminate\Http\Request;

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

//registration route
Route::post('auth/register', 'Auth\ApiRegisterController@create');

//protected routes
Route::resource('flashcards', 'FlashcardsController')->middleware('auth:api');
Route::resource('sections', 'SectionsController')->middleware('auth:api');
