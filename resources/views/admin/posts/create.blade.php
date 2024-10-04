@extends('layouts.admin')

@section('title', isset($post) ? "Редактировать статью ID {$post->id}" : 'Добавить статью')

@section('content')
<div class="container my-5">
    <h4 class="mb-4">{{ isset($post) ? "Редактировать статью ID: {$post->id}" : 'Добавить статью' }}</h4>

    <form enctype="multipart/form-data" method="POST" action="{{ isset($post) ? route('admin.posts.update', $post->id) : route('admin.posts.store') }}" class="needs-validation" novalidate>
        @csrf

        @if(isset($post))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="title" class="form-label">Название статьи</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Название" value="{{ old('title', $post->title ?? '') }}" required>
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="preview" class="form-label">Краткое описание</label>
            <input type="text" name="preview" class="form-control @error('preview') is-invalid @enderror" placeholder="Кратко" value="{{ old('preview', $post->preview ?? '') }}">
            @error('preview')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="4" placeholder="Описание">{{ old('description', $post->description ?? '') }}</textarea>
            @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        @if(isset($post) && $post->thumbnail)
            <div class="mb-3">
                <label class="form-label">Текущее изображение</label>
                <div>
                    <img src="/storage/posts/{{ $post->thumbnail }}" class="img-thumbnail" alt="Thumbnail" style="max-width: 200px;">
                </div>
            </div>
        @endif

        <div class="mb-3">
            <label for="thumbnail" class="form-label">Загрузить новое изображение</label>
            <input type="file" name="thumbnail" class="form-control @error('thumbnail') is-invalid @enderror">
            @error('thumbnail')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
</div>
@endsection
