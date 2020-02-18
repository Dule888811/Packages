<?php
Route::group(['namespace' => 'Dule\Login\Http\Controllers'],function(){
    Route::get('login','LoginController@index')->name('login');
    Route::get('curl/{id}','LoginController@curl');
    Route::get('register','LoginController@register');
    Route::post('home','LoginController@login')->name('loginUser');
    Route::get('logout','LoginController@logout')->name('logout');
    Route::post('registerUser','LoginController@store')->name('users.store');
});

