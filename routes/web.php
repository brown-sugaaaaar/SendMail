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

Route::get('/', function () {
    return view('welcome');
});

//フォームに入力してGmailで受け取る
Route::get('/contact','InquiryController@index');
Route::post('/contact/confirm','InquiryController@confirm');
Route::post('/contact/thanks','InquiryController@send');

//フォームに入力して管理画面に登録（DB登録する）
Route::get('/form','FormController@index');
Route::post('/form/confirm','FormController@confirm');
Route::post('/form/thanks','FormController@store');
// Route::get('/form/thanks','FormController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/inquiry', 'AdminInquiryController@index');

Route::get('/admin_form', 'AdminFormController@index');