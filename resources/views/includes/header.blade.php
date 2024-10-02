<div class="container">
    <header class="d-flex justify-content-between align-items-center py-3">
        <ul class="nav nav-pills justify-content-center">
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link" aria-current="page">Главная</a></li>
            <li class="nav-item"><a href="{{ route('posts.index') }}" class="nav-link" aria-current="page">Лента</a></li>
            <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">О нас</a></li>
            <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Контакты</a></li>
        </ul>

        <div class="ms-auto">
        @auth("web")
            <a href="{{ route('logout') }}" class="btn btn-outline-primary">Выйти</a>
        @endauth
        @guest("web")
            <a href="{{ route('login') }}" class="btn btn-outline-primary">Войти</a>
        @endguest
        </div>

    </header>
</div>
