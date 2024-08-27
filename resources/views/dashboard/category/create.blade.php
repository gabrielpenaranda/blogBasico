@extends('dashboard.master')

@section('title')
    Category|Create
@endsection

@section('content')

    @include('dashboard.fragments._errors-form')

    <form action="{{ route('category.store') }}" method="POST">
        @csrf

        @include('dashboard.category._form')

        <button type="submit">Send</button>
    </form>
@endsection