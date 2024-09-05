@extends('layouts.app')

@section('title')
    Category|Index
@endsection

@section('content')

    <a href="{{ route('category.create') }}" class="btn btn-primary my-3">New</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
            <tbody>
                @foreach ($categories as $c)
                    <tr>
                        <td>{{ $c->title }}</td>
                        <td>{{ $c->slug }}</td>
                        <td>
                            <a href="{{ route('category.edit', $c) }}" class="btn btn-primary mt-2">Edit</a>
                            <a href="{{ route('category.show', $c) }}" class="btn btn-warning mt-2">Show</a>
                            <form action="{{ route('category.destroy', $c) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger mt-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </thead>
    </table>

    <div class="mt-2 mr-2">
        {{ $categories->links() }}
    </div>
@endsection
