@extends('layouts.app')

@section('title', 'Главная')


@section('content')
    <div class="container my-5">
        <h5 class="text-center mb-4">Последние новости</h5>
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-6 mb-4">
                    @include("includes.post.item", ["post" => $post])
                </div>
            @endforeach
        </div>
    </div>
@endsection


@section('rightSpBlok')
    @parent
        <p>Текст после меню главной страницы</p>
@endsection
