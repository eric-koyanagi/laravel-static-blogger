<x-article-layout>
    <x-slot:title>
        {{ $article->title }}
    </x-slot>
    <header>
        <a href="./index.html">&laquo; Article List</a>
        <h1>{{ $article->title  }}</h1>
    </header>
    <section class="contents container-fluid">
        <section class="info">
            Posted on
            <time datetime="{{ $article->updated_at }}">{{ $article->updated_at->format('m/d/Y') }}</time>
            <address>By {{ $article->author }}</address>
        </section>
        {!! $article->body !!}
    </section>
    <section class="footer-links contents container-fluid">
        @if (!empty($article->getPrevious()))
            <a href="/{{$article->getPrevious()->slug }}" alt="Previous Article: {{ $article->getPrevious()->title }}">
                Previous: {{ $article->getPrevious()->title }}
            </a>
        @endif

        @if (!empty($article->getNext()))
            <a href="/{{$article->getNext()->slug }}" alt="Previous Article: {{ $article->getNext()->title }}">
                Next: {{ $article->getNext()->title }}
            </a>
        @endif
    </section>
</x-article-layout>