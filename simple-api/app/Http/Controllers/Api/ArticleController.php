<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    /**
     * Article(記事)の一覧を返すAPI
     */
    public function index()
    {
        $articles = Article::all();
        
        return response()->json([
            'message' => 'ok',
            'data' => $articles,
        ], 200);
    }

    /**
     * Article(記事)を作成するAPI
     */
    public function store(Request $request)
    {
        $article = Article::create($request->all());
        return response()->json([
            'message' => 'article created.',
            'data' => $article,
        ], 200);
    }

    /**
     * Article(記事)を1件取得するAPI
     */
    public function show(Request $request)
    {
        $article = Article::find($request->id);

        if ($article) {
            return response()->json([
                'message' => 'ok',
                'data' => $article,
            ], 200);
        }

        return response()->json([
            'message' => 'article not found.'
        ], 404);
    }

    /**
     * Article(記事)を1件更新するAPI
     */
    public function update(Request $request, $id)
    {
        $updData = [
            'title' => $request->title,
            'body' => $request->body,
        ];

        $article = Article::where('id', $id)->update($updData);

        if ($article) {
            return response()->json([
                'message' => 'article updated.',
            ], 200);
        }

        return response()->json([
            'message' => 'article not found.',
        ], 404);
    }

    /**
     * Article(記事)1件削除するAPI
     */
    public function destroy($id)
    {
        $article = Article::where('id', $id)->delete();

        if ($article) {
            return response()->json([
                'message' => 'article deleted.'
            ], 200);
        }

        return response()->json([
            'message' => 'article not found.'
        ], 404);
    }
}