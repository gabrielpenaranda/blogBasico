@extends('dashboard.master')

@section('title')
    Post|Create
@endsection

@section('content')

    @include('dashboard.fragments._errors-form')

    <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf

        @include('dashboard.post._form', ['task' => 'edit'])

        <button type="submit">Send</button>
    </form>
@endsection