<header class="d-flex justify-content-between align-items-center py-2 px-4 bg-dark navbar-dark">
    <a href="{{ route('home') }}" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="40" fill="white" class="bi bi-eyeglasses" viewBox="0 0 16 16">
            <path d="M4 6a2 2 0 1 1 0 4 2 2 0 0 1 0-4m2.625.547a3 3 0 0 0-5.584.953H.5a.5.5 0 0 0 0 1h.541A3 3 0 0 0 7 8a1 1 0 0 1 2 0 3 3 0 0 0 5.959.5h.541a.5.5 0 0 0 0-1h-.541a3 3 0 0 0-5.584-.953A2 2 0 0 0 8 6c-.532 0-1.016.208-1.375.547M14 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0"/>
        </svg>
    </a>

    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 flex-grow-1">
        <li><a href="{{ route('home') }}" class="nav-link px-2 text-white">Главная</a></li>
        <li><a href="{{ route('posts.index') }}" class="nav-link px-2 text-white">Лента</a></li>
        <li><a href="{{ route('about') }}" class="nav-link px-2 text-white">О нас</a></li>
        <li><a href="{{ route('contact') }}" class="nav-link px-2 text-white">Контакты</a></li>
    </ul>

    <div class="ms-auto">
        @auth("web")
            <a href="{{ route('profile') }}" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none" data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
            </a>
        @endauth
        @guest("web")
            <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm">Войти</a>
        @endguest
    </div>
</header>
