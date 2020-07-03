<?php

Route::prefix('admin/')->group(function () {
    // ------------------login and Logout------------------
    Route::match(['get', 'post'],       'loginme',  'Auth\AdminLoginController@login')->name('admin.loginme');
    Route::post('logout',                'Auth\AdminLoginController@logout')->name('admin.logout');


    // ---------------------------------------------------------
    // LOGGED USER CAN ACCESS THIS PORTION 
    // ---------------------------------------------------------
    Route::group(['namespace' => 'Backend', 'middleware' => 'auth:admin'], function () {
        // ------------------dashboard------------------
        Route::view('dashboard',                'backend.dashboard')->name('admin.dashboard');
        Route::resource('post',                 'PostController');
    });
});
