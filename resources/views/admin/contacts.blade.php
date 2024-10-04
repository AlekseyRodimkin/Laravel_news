@extends('layouts.admin')

@section('title', 'Обращения')


@section('content')
    <h3 class="mb-4">Обращения</h3>

    <table class="table table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">theme</th>
                <th scope="col">message</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->id}}</td>
                    <td>{{ $contact->name}}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->theme }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>{{ $contact->created_at }}</td>
                    <td>{{ $contact->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center mt-4">
        {{ $contacts->links('pagination::bootstrap-4') }}
    </div>
@endsection
