@extends('layouts.app')

@section('title', 'Восстановление пароля')

@section('content')
    <div class="container d-flex align-items-center justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-lg p-4 rounded">
                <h5 class="text-center mb-4">Восстановление пароля</h5>

                <form method="POST" action="{{ route('forgot_process') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Введите Email">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between mb-3">
                        <a href="{{ route('login') }}" class="text-primary">Вход</a>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Восстановить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
