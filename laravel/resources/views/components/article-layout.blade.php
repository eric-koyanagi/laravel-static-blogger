<html>
<head>
    <title>{{ $title ?? 'Untitled Article' }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        main { font-size: 2vh; }
        header { background: #eee; padding: 10px; text-align: center; margin-bottom: 10px; }
        h1 { font-size: 4vh; }
        h2 { font-size: 3vh; }
        article .info { font-style: italic; }
    </style>
</head>
<body>
<main>
    @include('article-header')
    <article>
        {{ $slot }}
    </article>
    @include('article-footer')
</main>
</body>
</html>