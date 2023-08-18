<x-article-layout>
    <x-slot:title>
        Discussing Development, Tech, and Nerdish Shit | EricKoyanagi.com
    </x-slot>
        <ul class="main-article-list">
            @foreach ($articles as $article)
                <li><a href="./{{$article->slug}}">{{ $article->title }}</a></li>
            @endforeach
        </ul>
</x-article-layout>