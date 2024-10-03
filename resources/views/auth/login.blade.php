@extends('layouts.app')

@section('title', 'Авторизация')

@section('content')
    <div class="container d-flex align-items-center justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-lg p-4 rounded">
                <h5 class="text-center mb-4">Вход</h5>

                <form method="POST" action="{{ route('login_process') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Введите Email">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Введите Пароль">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between mb-3">
                        <a href="{{ route('forgot') }}" class="text-primary">Забыли пароль?</a>
                        <a href="{{ route('register') }}" class="text-primary">Регистрация</a>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Войти</button>
                </form>
            </div>
        </div>
    </div>
@endsection
