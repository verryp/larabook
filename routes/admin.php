<?php

Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('authors/data', 'DataController@authors')->name('authors.data');
Route::resource('authors', 'AuthorController');
