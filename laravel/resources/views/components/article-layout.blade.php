<html>
<head>
    <title>{{ $title ?? 'Untitled Article' }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>

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