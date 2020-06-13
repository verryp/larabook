<?php

Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('authors/data', 'DataController@authors')->name('authors.data');
Route::resource('authors', 'AuthorController');

Route::get('books/data', 'DataController@books')->name('books.data');
Route::resource('books', 'BookController');
