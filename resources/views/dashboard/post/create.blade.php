@extends('layouts.app')

@section('title')
    Post|Create
@endsection

@section('content')

    @include('dashboard.fragments._errors-form')

    <form action="{{ route('post.store') }}" method="post">
        @csrf

        @include('dashboard.post._form')

        <button type="submit" class="btn btn-success mt-2">Send</button>
    </form>
@endsection

