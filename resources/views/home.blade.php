@extends('layouts.layout')
@section('title')Главная@endsection

@section('content')
    <h1>Главная</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta, quas adipisci exercitationem placeat similique fuga non nemo unde totam voluptatem corrupti voluptas quaerat magni alias magnam quibusdam labore. Ipsum, itaque.</p>

    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta, quas adipisci exercitationem placeat similique fuga non nemo unde totam voluptatem corrupti voluptas quaerat magni alias magnam quibusdam labore. Ipsum, itaque.</p>

    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta, quas adipisci exercitationem placeat similique fuga non nemo unde totam voluptatem corrupti voluptas quaerat magni alias magnam quibusdam labore. Ipsum, itaque.</p>
@endsection


@section('rightSpBlok')
    @parent
        <p>Текст после меню главной страницы</p>
@endsection
