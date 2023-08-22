<x-layout>
    <x-slot:title>
        Article Form
    </x-slot>
    <section class="article">
        <form method="post" action="/edit/" id="edit-form" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$article->id}}"/>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-3">
                <label for="articleTitle" class="form-label">Article Title</label>
                <input type="text" name="title" class="form-control" id="articleTitle" value="{{ old('title') ?? $article->title }}">
            </div>

            <div class="mb-3">
                <label for="articleAuthor" class="form-label">Author</label>
                <input type="text" name="author" class="form-control" id="articleAuthor" value="{{ old('author') ?? $article->author }}">
            </div>

            <div class="mb-3">
                <label for="articleContent" class="form-label">Content</label>
                <div class="form-control" id="articleContent">{!! old('body') ?? $article->body !!}</div>
            </div>

            <div class="mb-3">
                <label for="articleContent" class="form-label">Next (optional)</label>
                <div class="form-control" id="articleContent">
                    <x:select name="next" selected="{{ old('next') ?? $article->next }}" :options="$articles"/>
                </div>
            </div>

            <div class="mb-3">
                <label for="articleContent" class="form-label">Previous (optional)</label>
                <div class="form-control" id="articleContent">
                    <x:select name="previous" selected="{{ old('previous') ?? $article->previous }}" :options="$articles"/>
                </div>
            </div>

            <input type="hidden" name="body" id="body" value=""/>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </section>
    <script>
            var toolbarOptions = [
                ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
                ['blockquote', 'code-block'],

                [{ 'header': 1 }, { 'header': 2 }],               // custom button values
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
                [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
                [{ 'direction': 'rtl' }],                         // text direction

                [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                [ 'link', 'image', 'video', 'formula' ],          // add's image support
                [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
                [{ 'font': [] }],
                [{ 'align': [] }],

                ['clean']                                         // remove formatting button
            ];

            var quill = new Quill('#articleContent', {
                theme: 'snow',
                modules: {
                    toolbar: toolbarOptions
                }
            });

            // extracts HTML from quill and inserts it into the form
            function updateBody(ev) {
                document.getElementById("body").value = quill.root.innerHTML;
            }

            const form = document.getElementById("edit-form");
            form.addEventListener("submit", updateBody);
    </script>
</x-layout>