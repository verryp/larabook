<?php

Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('authors', 'AuthorController@index')->name('author.index');
Route::get('authors/data', 'DataController@authors')->name('author.data');
