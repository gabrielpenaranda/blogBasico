@extends('layouts.app')

@section('title')
    Post|Index
@endsection

@section('content')
    <a href="{{ route('post.create') }}" class="btn btn-primary my-3">New</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Posted</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
            <tbody>
                @foreach ($posts as $p)
                    <tr>
                        <td>{{ $p->title }}</td>
                        <td>{{ $p->posted }}</td>
                        <td>{{ $p->category->title }}</td>
                        <td>
                            <a href="{{ route('post.edit', $p) }}" class="btn btn-primary mt-2">Edit</a>
                            <a href="{{ route('post.show', $p) }}" class="btn btn-warning mt-2">Show</a>
                            <form action="{{ route('post.destroy', $p) }}" method="POST">
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
        {{ $posts->links() }}
    </div>
@endsection

