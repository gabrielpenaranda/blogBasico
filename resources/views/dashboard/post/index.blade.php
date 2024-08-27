@extends('dashboard.master')

@section('title')
    Post|Index
@endsection

@section('content')
    <a href="{{ route('post.create') }}">New</a>
    <table>
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
                            <a href="{{ route('post.edit', $p) }}">Edit</a>
                            <a href="{{ route('post.show', $p) }}">Show</a>
                            <form action="{{ route('post.destroy', $p) }}" method="POST">
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

    {{ $posts->links() }}
@endsection