<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Admin Panel - Статьи</title>
</head>
<body class="d-flex flex-column" style="height: 100vh;">
    <div class="d-flex" style="flex: 1;">
        <nav class="bg-dark text-light p-3 flex-column" style="width: 250px; min-height: 100vh;">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="{{ route('admin.users') }}" class="nav-link text-light">Пользователи</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.posts.index') }}" class="nav-link text-light">Статьи</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.contacts') }}" class="nav-link text-light">Обращения</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.logout') }}">Выйти</a>
                </li>
            </ul>
        </nav>

        <div class="flex-fill d-flex flex-column">
            <main class="flex-fill bg-light p-4 overflow-auto">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
