@extends('layouts.app')

@section('title', 'Главная')


@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Последние новости</h1>
        <div class="row">
            @foreach($posts as $post)
                @include("includes.post.item", ["post" => $post])
            @endforeach
        </div>
    </div>
@endsection


@section('rightSpBlok')
    @parent
        <p>Текст после меню главной страницы</p>
@endsection
