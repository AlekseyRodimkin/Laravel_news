@extends('layouts.admin')

@section('title', 'Статьи')


@section('content')
    <h3 class="mb-4">Статьи</h3>

    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary mb-3">Добавить статью</a>

    <table class="table table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th scope="col">Заголовок</th>
                <th scope="col" class="text-end">Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td class="text-end">
                        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-sm btn-outline-primary">Редактировать</a>
                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center mt-4">
        {{ $posts->links('pagination::bootstrap-4') }}
    </div>
@endsection
