@extends('layouts.app')

@section('title', 'Лента')

@section('content')
    <div class="row">
        @foreach($posts as $post)
            @include("includes.post.item", ["post" => $post])
        @endforeach
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $posts->links('pagination::bootstrap-4') }}
    </div>
@endsection
