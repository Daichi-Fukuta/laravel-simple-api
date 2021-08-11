<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    /**
     * Author(著者)一覧を返すAPI
     */
    public function index()
    {
        $authors = Author::all();
        
        return response()->json([
            'message' => 'ok',
            'data' => $authors,
        ], 200);
    }

    /**
     * Author(著者)を作成するAPI
     */
    public function store(Request $request)
    {
        $author = Author::create($request->all());
        return response()->json([
            'message' => 'author created.',
            'data' => $author,
        ], 200);
    }

    /**
     * Author(著者)を1件取得するAPI
     */
    public function show(Request $request)
    {
        $author = Author::find($request->id);

        if ($author) {
            return response()->json([
                'message' => 'ok',
                'data' => $author,
            ], 200);
        }

        return response()->json([
            'message' => 'author not found.'
        ], 404);
    }

    /**
     * Author(著者)を1件更新するAPI
     */
    public function update(Request $request, $id)
    {
        $updData = [
            'name' => $request->name,
        ];

        $author = Author::where('id', $id)->update($updData);

        if ($author) {
            return response()->json([
                'message' => 'author updated.',
            ], 200);
        }

        return response()->json([
            'message' => 'author not found.',
        ], 404);
    }

    /**
     * Author(著者)1件削除するAPI
     */
    public function destroy($id)
    {
        $author = Author::where('id', $id)->delete();

        if ($author) {
            return response()->json([
                'message' => 'author deleted.'
            ], 200);
        }

        return response()->json([
            'message' => 'author not found.'
        ], 404);
    }
}
