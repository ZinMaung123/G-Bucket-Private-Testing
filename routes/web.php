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
    return view('welcome');
});

Route::get("/images", "ImageController@index");
Route::get('/images/{image}', "PdfController");
Route::get('/images/{image}/wkhtml-pdf', "WkhtmlPdfController");
Route::get("/images/upload", "ImageController@uploadForm");
Route::post("/images/upload", "ImageController@upload");
