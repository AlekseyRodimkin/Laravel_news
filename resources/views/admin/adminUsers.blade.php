@extends('layouts.admin')

@section('title', 'Пользователи')


@section('content')
    <h3 class="mb-4">Пользователи</h3>

    <table class="table table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">email_verified</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id}}</td>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->email_verified }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center mt-4">
        {{ $users->links('pagination::bootstrap-4') }}
    </div>
@endsection
