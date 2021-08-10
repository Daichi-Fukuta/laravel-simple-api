<?php

use Illuminate\Support\Facades\Route;

Route::get('/articles', 'Api\ArticleController@index');
