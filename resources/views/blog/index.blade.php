<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flexio - Blog</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.navbar')

    <div class="container mt-5">
        <h1>Our Blog</h1>
        <div class="list-group">
            <a href="/blog/post-1" class="list-group-item list-group-item-action">Post Title 1</a>
            <a href="/blog/post-2" class="list-group-item list-group-item-action">Post Title 2</a>
            <a href="/blog/post-3" class="list-group-item list-group-item-action">Post Title 3</a>
        </div>
    </div>

    @include('partials.footer')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
