<x-article-layout>
    <x-slot:title>
        {{ $article->title }}
    </x-slot>
    <header>
        <h1>{{ $article->title  }}</h1>
    </header>
    <section class="info">
        Posted on
        <time datetime="{{ $article->updated_at }}">{{ $article->updated_at->format('m/d/Y') }}</time>
        <address>By {{ $article->author }}</address>
    </section>
    <section class="contents">
        {!! $article->body !!}
    </section>
</x-article-layout>