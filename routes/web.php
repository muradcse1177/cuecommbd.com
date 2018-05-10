<?php
session_start();
Route::get('/', 'backend\settingController@frontPage');
Route::get('/home', 'backend\settingController@sessionCheck');
Route::get('/fullGallery', 'backend\settingController@fullGallery');
Route::get('/fullEmployee', 'backend\settingController@fullEmployee');
Route::get('/fullBlog_view', 'backend\settingController@fullBlog_view');
Route::post('/cvBank', 'backend\settingController@cvBank');
Route::get('/downloadPdf', 'backend\settingController@downloadPdf')->name('downloadPdf');

Route::get('/logout', function () {
    session_destroy();
    return view('web_mngt/sign-in', ['errorInfo' => 'You are Successfully logged out.']);
});
Route::get('/login', function () {
    return view('web_mngt/sign-in');
});
Route::get('/career', function () {
    return view('front_layout/career');
});
Route::get('/companyInfo', function () {
    if(isset($_SESSION["username"])) {
        return view('web_mngt/companyInfo');
    } else{
        return view('web_mngt/sign-in', ['errorInfo' => 'Session are not set.Please login again']);
    }
});
Route::get('/galleryBlog', function () {
    if(isset($_SESSION["username"])) {
        return view('web_mngt/galleryBlog');
    } else{
        return view('web_mngt/sign-in', ['errorInfo' => 'Session are not set.Please login again']);
    }
});
Route::get('/stuffInfo', function () {
    if(isset($_SESSION["username"])) {
        return view('web_mngt/stuffInfo');
    } else{
        return view('web_mngt/sign-in', ['errorInfo' => 'Session are not set.Please login again']);
    }
});
Route::get('/newsletterList', function () {
    if(isset($_SESSION["username"])) {
        return view('web_mngt/newsletterList');
    } else{
        return view('web_mngt/sign-in', ['errorInfo' => 'Session are not set.Please login again']);
    }
});
Route::get('/contac-us', function () {
    if(isset($_SESSION["username"])) {
        return view('web_mngt/contac-us');
    } else{
        return view('web_mngt/sign-in', ['errorInfo' => 'Session are not set.Please login again']);
    }
});
Route::get('/aboutUs', function () {
    if(isset($_SESSION["username"])) {
        return view('web_mngt/aboutUs');
    } else{
        return view('web_mngt/sign-in', ['errorInfo' => 'Session are not set.Please login again']);
    }
});
Route::get('/addUser', function () {
    if(isset($_SESSION["username"])) {
        return view('web_mngt/addUser');
    } else{
        return view('web_mngt/sign-in', ['errorInfo' => 'Session are not set.Please login again']);
    }
});
Route::get('/cvBankform', function () {
    if(isset($_SESSION["username"])) {
        return view('web_mngt/cvBankform');
    } else{
        return view('web_mngt/sign-in', ['errorInfo' => 'Session are not set.Please login again']);
    }
});
