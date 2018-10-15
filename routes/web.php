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

Route::get('/', function () {
    return view('pages.index');


});


Route::get('/About', function () {
    return view('pages.about');


});


Route::get('/Contact', function () {
    return view('pages.contact');


});


Route::post('/', function () {
    return view('welcome');


});
