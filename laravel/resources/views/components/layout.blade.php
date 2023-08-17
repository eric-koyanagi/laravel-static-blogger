<html>
<head>
    <title>{{ $title ?? 'Static Article Generator' }}</title>

    <!-- Bootstrap CSS, theme, and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Rich text editor -->
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
</head>
<body>
    <main>
        <h1> {{ $title  }}</h1>
        <a href="/">Article List</a> |
        <a href="/new">New Article</a> |
        <a href="{{ env('SITE_URL', "https://erickoyanagi.com") }}">View Live Site</a>
        <hr/>
        {{ $slot }}
    </main>
    <footer>
        <div class="info">info and other projects at my github: <a href="https://github.com/eric-koyanagi">https://github.com/eric-koyanagi</a></div>
    </footer>
</body>
</html>