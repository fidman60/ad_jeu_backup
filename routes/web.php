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


Route::get("/","ParticipantController@index");

Route::post('/participant', "ParticipantController@store");

Route::get('/admin',"ParticipantController@participantsList");

Route::get('/participant/{id}', 'ParticipantController@participant')->where('id','^[0-9]+$');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin',"ParticipantController@participantsList");

Route::get('/export/participants','ParticipantController@exportParticipantsList')->name('exportParticipants');