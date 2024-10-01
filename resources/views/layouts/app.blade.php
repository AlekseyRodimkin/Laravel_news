<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='/css/app.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
    @include('includes.header')

    <div class='container mt-5'>

        @include('includes.serviceMessages')

        @yield('content')

    </div>
    @include('includes.footer')
    <script src="/js/app.js"></script>
</body>
</html>
