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

Route::get('/', ['uses' => 'PagesController@welcome']);
Route::get('welcome', ['uses'=>'PagesController@welcome']);
Route::get('home', ['uses'=>'PagesController@welcome']);
Route::get('survey', ['uses' => 'SurveyController@survey']);
Route::get('contact',['uses'=>'PagesController@contact']);
Route::get('about',['uses'=>'PagesController@about']);
Route::post('SU', ['uses'=>'SurveyController@getData']);
