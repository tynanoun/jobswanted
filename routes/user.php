<?php
Route::group(['prefix' => '/admin'], function () {
    Route::get('/user', 'AdminController@index');

    Route::post('/user/addEducation', ['as'=>'user.addEducation', 'uses'=>'AdminController@addEducation']);

});