@extends('layouts.app')

@section('title', 'Профиль пользователя')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg border-0">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center">
                        <div>
                            <h3 class="mb-1">{{ $user->name }}</h3>
                            <p class="text-muted mb-0">Email: {{ $user->email }}</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row mt-4">
                        <div class="col-md-4">
                            <div class="info-box mb-3">
                                <h5 class="text-primary">Дата регистрации</h5>
                                <p>{{ $user->created_at->format('d.m.Y') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <a href="{{ route('home') }}" class="btn btn-light">На главную</a>
                        <a href="{{ route('logout') }}" class="btn btn-light-bg-subtle">Выход</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
