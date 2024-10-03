@extends('layouts.app')

@section('title', 'Регистрация')

@section('content')
    <div class="container d-flex align-items-center justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-lg p-4 rounded">
                <h5 class="text-center mb-4">Регистрация</h5>

                <form method="POST" action="{{ route('register_process') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Имя</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Введите имя">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Введите Email">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Введите пароль">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Подтверждение пароля</label>
                        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Подтвердите пароль">
                        @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 text-end">
                        <a href="{{ route('login') }}" class="text-primary">Войти</a>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Зарегистрироваться</button>
                </form>
            </div>
        </div>
    </div>
@endsection
