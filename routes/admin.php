<?php

Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('authors', 'AuthorController@index')->name('author.index');
Route::get('authors/create', 'AuthorController@create')->name('author.create');
Route::post('authors', 'AuthorController@store')->name('author.store');
Route::get('authors/{author}/edit', 'AuthorController@edit')->name('author.edit');
Route::put('authors/{author}', 'AuthorController@update')->name('author.update');
Route::delete('authors/{author}', 'AuthorController@destroy')->name('author.destroy');
Route::get('authors/data', 'DataController@authors')->name('author.data');
