@extends('layout.main_layout')

@section('content')
    <h1>{{ $title }}</h1>
    <a class="btn btn-primary mb-3" href="/todo/tambah">Tambah</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todos as $todo)
                <tr>
                    <td><a href="/todo/{{ $todo->id }}/{{ $todo->title }}">
                            {{ $todo->title }}
                        </a></td>
                    <td>
                        <form action="/todo/{{ $todo->id }}" method="POST">
                            @method("delete")
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
