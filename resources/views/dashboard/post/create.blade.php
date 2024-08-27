@extends('dashboard.master')

@section('title')
    Post|Create
@endsection

@section('content')

    @include('dashboard.fragments._errors-form')

    <form action="{{ route('post.store') }}" method="post">
        @csrf

        @include('dashboard.post._form')

        <button type="submit">Send</button>
    </form>
@endsection