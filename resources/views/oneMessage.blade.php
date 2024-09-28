@extends('layouts.layout')

@section('title'){{ $data->name }}@endsection

@section('content')
    <p><a href="{{ route('contacts-usermessages') }}">История обращений</a></p>
    <div class = 'alert alert-info' style = "border-radius: 30px;">
        <h3>{{ $data->theme }}</h3>

        <p>{{ $data->name }} | {{ $data->email }} | <small>{{ $data->created_at }}</small></p>

        <p><strong>{{ $data->message }}</strong></p>

        <a class="btn btn-info btn-sm" href='{{ route("contacts-updateform", $data->id) }}'>Редактировать</a>

        <a class="btn btn-outline-secondary btn-sm" href='{{ route("contacts-delete", $data->id) }}'>
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"></path>
            </svg>
        </a>
    </div>
@endsection
