<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () { /* Middleware: admin eklenecek */

    Route::get('index', 'AdminController@index')->name('admin.dashboard');

    Route::group(['prefix' => 'category'], function(){
        Route::get('index', 'CategoryController@index')->name('admin.category.index');
        Route::get('create', 'CategoryController@create')->name('admin.category.create');
        Route::post('store', 'CategoryController@store')->name('admin.category.store');
        Route::get('show/{category}', 'CategoryController@show')->name('admin.category.show');
        Route::get('edit/{category}', 'CategoryController@edit')->name('admin.category.edit');
        Route::post('update/{category}', 'CategoryController@update')->name('admin.category.update');
        Route::get('delete/{category}', 'CategoryController@destroy')->name('admin.category.delete');
    });
    
    Route::group(['prefix' => 'tour'], function(){
        Route::get('index', 'TourController@index')->name('admin.tour.index');
        Route::get('create', 'TourController@create')->name('admin.tour.create');
        Route::post('store', 'TourController@store')->name('admin.tour.store');
        Route::get('show/{tour}', 'TourController@show')->name('admin.tour.show');
        Route::get('edit/{tour}', 'TourController@edit')->name('admin.tour.edit');
        Route::post('update/{tour}', 'TourController@update')->name('admin.tour.update');
        Route::get('delete/{tour}', 'TourController@destroy')->name('admin.tour.delete');
    });

});
