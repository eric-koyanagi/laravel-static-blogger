<html>
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HSQQP37YMS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-HSQQP37YMS');
    </script>

    <title>{{ $title ?? 'Untitled Article' }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        main { font-size: 2vh; }
        header { background: #eee; padding: 10px; text-align: center; margin-bottom: 10px; }
        h1 { font-size: 4vh; }
        h2 { font-size: 3vh; }
        article .info { font-style: italic; }
        article .contents { padding: 0 25px; max-width:1200px; }
        .ql-syntax { background: #eee; padding: 5px; }
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