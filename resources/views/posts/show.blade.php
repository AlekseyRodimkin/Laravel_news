@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div class='row'>
        <div class='col-lg-9 col-md-8'>
            <div class="card mb-4 shadow-sm">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/storage/posts/{{ $post->thumbnail }}" class="img-fluid rounded-start" alt="Thumbnail">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 class="card-title">{{ $post->title }}</h2>
                            <p class="card-text">{!! $post->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="task-comments" class="mb-4">
                <h3>Коментарии</h3>
                @foreach($post->comments as $comment)
                <div class="card mb-3 shadow-sm bg-light" style="max-width: 90%; margin-left: auto; margin-right: auto;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <h6 class="mb-0">{{ $comment->user->name }}</h6>
                            <small class="text-muted">{{ $comment->created_at->format('d M Y, H:i') }}</small>
                        </div>
                        <p class="mb-0">{{ $comment->text }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class='col-lg-3 col-md-4'>
            <div id="comment-form" class="sticky-top" style="top: 80px;">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <form method="POST" action="{{ route('comment', $post->id) }}">
                            @csrf
                            <div class="mb-3">
                                <textarea name="text" class="form-control @error('text') is-invalid @enderror" rows="3" placeholder="Ваш комментарий..."></textarea>
                                @error('text')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Написать</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
