@extends('layouts.app')

@section('title', 'Лента')

@section('content')
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-12 mb-4">
                @include("includes.post.item", ["post" => $post])
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $posts->links('pagination::bootstrap-4') }}
    </div>
@endsection
