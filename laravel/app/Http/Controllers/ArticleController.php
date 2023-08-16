<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return view('articles', ['articles' => Article::all()]);
    }

    public function edit(Request $request, $id = null)
    {
        $article = $id ? Article::find($id) : null;
        return view('article', ['id' => $id, 'article' => $article]);
    }

    public function save(Request $request)
    {

    }
}
