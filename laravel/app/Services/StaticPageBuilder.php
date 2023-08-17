<?php

namespace App\Services;

use App\Models\Article;

class StaticPageBuilder
{
    public function build(Article $article): string
    {
        return view('article', compact('article'))->render();
    }
}