<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flexio - Home</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.navbar')

    <header class="container text-center mt-5">
        <h1>Welcome to Flexio</h1>
        <p class="lead">Your partner in SEO Marketing and HR Services.</p>
        <a href="/services" class="btn btn-primary mt-4">Our Services</a>
    </header>

    @include('partials.footer')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
