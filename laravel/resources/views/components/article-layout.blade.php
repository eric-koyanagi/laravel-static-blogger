<html>
<head>
    <title>{{ $title ?? 'Untitled Article' }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<main>
    <h1>{{ $title  }}</h1>
    {{ $slot }}
</main>
<footer>

</footer>
</body>
</html>