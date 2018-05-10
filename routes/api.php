<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Login Api Controller
Route::post('signIn', 'backend\settingController@index');
Route::post('insertCompanyInfo', 'backend\settingController@insertCompanyInfo');
Route::post('showCompanyInfo', 'backend\settingController@showCompanyInfo');
Route::post('insertContentInfo', 'backend\settingController@insertContentInfo');
Route::post('showContentInfo', 'backend\settingController@showContentInfo');
Route::post('insertEmployeeInfo', 'backend\settingController@insertEmployeeInfo');
Route::post('showEmployeeInfo', 'backend\settingController@showEmployeeInfo');
Route::post('insertNewsletter', 'backend\settingController@insertNewsletter');
Route::post('showNewsLetter', 'backend\settingController@showNewsLetter');
Route::post('insertContactUs', 'backend\settingController@insertContactUs');
Route::post('showContactUs', 'backend\settingController@showContactUs');
Route::post('insertAboutUs', 'backend\settingController@insertAboutUs');
Route::post('showAboutUs', 'backend\settingController@showAboutUs');
Route::post('showuserInfo', 'backend\settingController@showuserInfo');
Route::post('adduser', 'backend\settingController@adduser');
Route::post('cvUpload', 'backend\settingController@cvUpload');