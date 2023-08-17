<x-layout>
    <x-slot:title>
        All Articles
    </x-slot>
    <section class="articles">
        <h2>Ordered by most recent first</h2>
        <ul class="main-article-list">
            @foreach ($articles as $article)
                <li><a href="/edit/{{$article->id}}">{{ $article->title }}</a></li>
            @endforeach
        </ul>
    </section>
</x-layout>