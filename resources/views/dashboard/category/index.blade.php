@extends('dashboard.master')

@section('title')
    Category|Index
@endsection

@section('content')
    <a href="{{ route('category.create') }}">New</a>
    <table>
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
                            <a href="{{ route('category.edit', $c) }}">Edit</a>
                            <a href="{{ route('category.show', $c) }}">Show</a>
                            <form action="{{ route('category.destroy', $c) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </thead>
    </table>

    {{ $categories->links() }}
@endsection