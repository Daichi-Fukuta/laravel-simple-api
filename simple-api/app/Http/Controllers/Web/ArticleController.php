<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('author')->get();
        return view('Article.index', ['articles' => $articles]);
    }
}