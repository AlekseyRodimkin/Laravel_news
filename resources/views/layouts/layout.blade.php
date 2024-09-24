<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='/css/app.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
    @include('includes.header')

    @if(Request::is('/'))
        @include('includes.upSpBlock')
    @endif



    <div class='container mt-5'>
        @include('includes.serviceMessages')
        <div class='row'>
            <div class='col-8'>
                @yield('content')
            </div>
            <div class='col-4'>
                @if(Request::is('contact'))
                    @include('includes.contact_comment')
                @endif
                @if(Request::is('/'))
                    @include('includes.rightSpBlok')
                @endif
            </div>
        </div>
    </div>
    @include('includes.footer')
</body>
</html>
