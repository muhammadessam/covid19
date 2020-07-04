<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Auth')->group(function () {
    //Login Routes
    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/login', 'LoginController@login');
    Route::post('/logout', 'LoginController@logout')->name('logout');

    //Forgot Password Routes
    Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');

    //Reset Password Routes
    Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.update');

});


Route::middleware('auth:admin')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('village', 'VillageController');
    Route::resource('observer', 'ObserverController');
    Route::resource('patient', 'PatientController');
    Route::get('settings', 'SettingsController@index')->name('settings.index');
    Route::post('settings', 'SettingsController@store')->name('settings.store');
    Route::get('report', 'ReportController@index')->name('report.index');


});
