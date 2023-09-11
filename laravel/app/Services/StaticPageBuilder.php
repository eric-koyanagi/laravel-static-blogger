<?php

namespace App\Services;

use App\Models\Article;
use MatthiasMullie\Minify;

class StaticPageBuilder
{
    // Renders an article, returns the final HTML markup
    public function build(Article $article): string
    {
        return view('article', [
            'article' => $article,
            'baked_css' => $this->getBakedCSS()
        ])->render();
    }

    // Returns the final HTMl for the article index ("blog homepage")
    public function buildArticleIndex(): string
    {
        return view('article-index', [
            'articles' => Article::orderByDesc('created_at')->get(),
            'baked_css' => $this->getBakedCSS()
        ])->render();
    }

    // returns minified CSS for use inline in the article layout
    protected function getBakedCSS(): string
    {
        // Using a Package
        $sourcePath = public_path('css/article-layout.css');
        $minifier = new Minify\CSS($sourcePath);
        return $minifier->minify();
    }
}