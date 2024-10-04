@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div class='row'>
        <div class='col-lg-9 col-md-8 mb-4'>
            <div class="card shadow-sm border-0">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/storage/posts/{{ $post->thumbnail }}" class="img-fluid rounded-start" alt="Thumbnail" style="object-fit: cover; height: 100%; max-height: 200px;">
                    </div>
                    <div class="col-md-8 d-flex flex-column">
                        <div class="card-body d-flex flex-column">
                            <h2 class="card-title fw-bold text-dark">{{ $post->title }}</h2>
                            <p class="card-text text-muted" style="text-align: justify;">{!! nl2br(e($post->description)) !!}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="task-comments" class="mb-4">
                <h3>Комментарии</h3>
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
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <form method="POST" action="{{ route('comment', $post->id) }}">
                            @csrf
                            <div class="mb-3">
                                <textarea name="text" class="form-control @error('text') is-invalid @enderror" rows="3" placeholder="Ваш комментарий..."></textarea>
                                @error('text')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-secondary w-100">Написать</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
