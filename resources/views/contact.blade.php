@extends('layouts.app')

@section('title', 'Контакты')


@section('content')
    <div class='row'>
        <div class='col-8'>
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
        </div>
        <div class='col-4'>
            <h4>Здесь вы можете обратиться к нам по любому интересующему вас вопросу</h4>

            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="25" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-exclamation" viewBox="0 0 16 16">
            <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
            <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-3.5-2a.5.5 0 0 0-.5.5v1.5a.5.5 0 0 0 1 0V11a.5.5 0 0 0-.5-.5m0 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
            </svg>
        </div>
    </div>
@endsection
