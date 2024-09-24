@extends('layouts.layout')
@section('title')Контакты@endsection

@section('content')
    <h3>Обратиться</h3>

    <form action="{{ route('contact-form') }}" method="post">
        @csrf
        <div class='form-group'>
            <label for='name'>Имя:</label>
            <input type='text' name='name' id='name' placeholder='Введите имя' class='form-control'>
        </div>
        <div class='form-group'>
            <label for='email'>Ваш email:</label>
            <input type='text' name='email' id='email' placeholder='Email@mail.ru' class='form-control'>
        </div>
        <div class='form-group'>
            <label for='theme'>Тема обращения:</label>
            <input type='text' name='theme' id='theme' placeholder='Тема' class='form-control'>
        </div>
        <div class='form-group'>
            <label for='message'>Текст обращения:</label>
            <textarea type='text' name='message' id='message' class='form-control'></textarea>
        </div>
        <button type='submit' class='btn btn-success'>Отправить</button>
    </form>
    <br>
    <p><a href='contacts/userMessages'>История обращений</a></p>
@endsection


