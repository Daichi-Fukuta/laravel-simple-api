<?php

use Illuminate\Support\Facades\Route;

// Article(記事)取得API
Route::get   ('/articles',     'Api\ArticleController@index'  )->name('articles.index');
Route::post  ('/article',      'Api\ArticleController@store'  )->name('articles.store');
Route::get   ('/article/{id}', 'Api\ArticleController@show'   )->name('article.show');
Route::patch ('/article/{id}', 'Api\ArticleController@update' )->name('article.update');
Route::delete('/article/{id}', 'Api\ArticleController@destroy')->name('article.destroy');

// Author(著者)取得API
Route::get   ('/authors',     'Api\AuthorController@index'  )->name('authors.index');
Route::post  ('/author',      'Api\AuthorController@store'  )->name('author.store');
Route::get   ('/author/{id}', 'Api\AuthorController@show'   )->name('author.show');
Route::patch ('/author/{id}', 'Api\AuthorController@update' )->name('author.update');
Route::delete('/author/{id}', 'Api\AuthorController@destroy')->name('author.destroy');