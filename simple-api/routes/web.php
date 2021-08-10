<?php

use Illuminate\Support\Facades\Route;

Route::get('/articles', 'Web\ArticleController@index');
