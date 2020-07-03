<?php

Route::get('/',                 'HomeController@index')->name('home');
Route::get('details/{post}',    'HomeController@details')->name('details');

Auth::routes();
