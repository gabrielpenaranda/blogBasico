@extends('layouts.app')

@section('title')
    Category|Create
@endsection

@section('content')

    @include('dashboard.fragments._errors-form')

    <form action="{{ route('category.store') }}" method="POST">
        @csrf

        @include('dashboard.category._form')

        <button type="submit" class="btn btn-danger mt-2">Send</button>
    </form>
@endsection

