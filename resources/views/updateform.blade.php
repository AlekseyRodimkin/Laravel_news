@extends('layouts.app')
@section('title', 'Редактирование')

@section('content')
    <form action="{{ route('contact-update', $data->id) }}" method="post">
        @csrf
        <div class='form-group'>
            <label for='name'>Имя:</label>
            <input type='text' name='name' id='name' value="{{$data->name}}" placeholder='Введите имя' class='form-control'>
        </div>
        <div class='form-group'>
            <label for='email'>Ваш email:</label>
            <input type='text' name='email' id='email' value="{{$data->email}}"placeholder='Email@mail.ru' class='form-control'>
        </div>
        <div class='form-group'>
            <label for='theme'>Тема обращения:</label>
            <input type='text' name='theme' id='theme' value="{{$data->theme}}"placeholder='Тема' class='form-control'>
        </div>
        <div class='form-group'>
            <label for='message'>Текст обращения:</label>
            <textarea type='text' name='message' id='message' class='form-control'>{{$data->message}}</textarea>
        </div>
        <button type='submit' class='btn btn-warning'>Сохранить</button>
    </form>
    <br>
    <p><a href="{{ route('contacts-usermessages') }}">История обращений</a></p>
@endsection


