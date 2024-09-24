@extends('layouts.layout')

@section('title')Ваши обращения@endsection

@section('content')
    @foreach($data as $each)
        <div class = 'alert alert-info' style = "border-radius: 30px;">
            <p>
                {{ $each->name }} | {{ $each->email }} | <small>{{ $each->created_at }}</small>
            </p>
            <p>Тема обращения: <strong>{{ $each->theme }}</strong></p>
            <a href='{{ route("contacts-onemessage", $each->id) }}'>
                <button class="btn btn-info">Открыть</button>
            </a>
        </div>
    @endforeach
@endsection
