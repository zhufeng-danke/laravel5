<?php


Route::group(['prefix' => 'demos/the-basic', 'namespace'=> 'Demos\TheBasics'], function () {
    Route::group(['prefix' => 'validation'], function () {
        Route::any('rule', 'ValidationController@rule')->name('demos-the-basic-validation-rule');

    });


});