<x-article-layout>
    <x-slot:title>
        {{ $article->title }}
    </x-slot>

    {{ $article->markup }}
</x-article-layout>