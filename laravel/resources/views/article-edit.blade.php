<x-layout>
    <x-slot:title>
        Article Form
    </x-slot>
    <section class="article">
        <form method="post" action="/edit/" id="edit-form" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{{$article->id}}"/>
            {{ csrf_field() }}

            <div class="mb-3">
                <label for="articleTitle" class="form-label">Article Title</label>
                <input type="text" name="title" class="form-control" id="articleTitle" value="{{ $article->title }}">
            </div>

            <div class="mb-3">
                <label for="articleAuthor" class="form-label">Author</label>
                <input type="text" name="author" class="form-control" id="articleAuthor" value="{{ $article->author }}">
            </div>

            <div class="mb-3">
                <label for="articleContent" class="form-label">Content</label>
                <div class="form-control" id="articleContent">{!! $article->body !!}</div>
            </div>

            <input type="hidden" name="body" id="body" value=""/>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </section>
    <script>
            var quill = new Quill('#articleContent', {
                theme: 'snow'
            });

            // extracts HTML from quill and inserts it into the form
            function updateBody(ev) {
                document.getElementById("body").value = quill.root.innerHTML;
            }

            const form = document.getElementById("edit-form");
            form.addEventListener("submit", updateBody);
    </script>
</x-layout>