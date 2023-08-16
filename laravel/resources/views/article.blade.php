<x-layout>
    <x-slot:title>
        Article Form
    </x-slot>
    <section class="article">
        <form method="post" action="/edit/{{$id}}">

            <div class="mb-3">
                <label for="articleTitle" class="form-label">Article Title</label>
                <input type="text" class="form-control" id="articleTitle">
            </div>

            <div class="mb-3">
                <label for="articleAuthor" class="form-label">Author</label>
                <input type="text" class="form-control" id="articleAuthor">
            </div>

            <div class="mb-3">
                <label for="articleContent" class="form-label">Content</label>
                <textarea class="form-control" id="articleContent" rows="15"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </section>
</x-layout>