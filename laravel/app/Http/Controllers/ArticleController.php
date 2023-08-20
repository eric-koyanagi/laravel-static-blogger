<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return view('article-list', ['articles' => Article::orderByDesc('created_at')->get()]);
    }

    public function edit(Request $request, $id = null)
    {
        $article = !empty($id) ? Article::find($id) : new Article;
        return view('article-edit',
            [
                'id' => $id ?? 0,
                'article' => $article,
                'articles' => Article::all()
            ]
        );
    }

    public function save(Request $request)
    {
        $request->validate([
            'title' => ['required', 'max:255'],
            'author' => ['required'],
            'body' => ['required'],
        ]);

        $id = $request->input('id');

        $article = !empty($id) ? Article::find($id) : new Article;
        $article->title = $request->input('title');
        $article->author = $request->input('author');
        $article->body = $request->input('body');
        $article->next = $request->input('next');
        $article->previous = $request->input('previous');
        $article->setSlug();
        $article->save();
        return $article->publish();
    }
}
