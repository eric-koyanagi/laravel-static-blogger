<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return view('article-list', ['articles' => Article::all()]);
    }

    public function edit(Request $request, $id = null)
    {
        $article = !empty($id) ? Article::find($id) : new Article;
        return view('article-edit', ['id' => $id ?? 0, 'article' => $article]);
    }

    public function save(Request $request)
    {
        $id = $request->input('id');

        $article = !empty($id) ? Article::find($id) : new Article;
        $article->title = $request->input('title');
        $article->author = $request->input('author');
        $article->body = $request->input('body');
        $article->save();
        $article->publish();

        return "Saved.";
    }
}
