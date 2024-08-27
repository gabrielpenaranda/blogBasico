@extends('dashboard.master')

@section('title')
    Category|Create
@endsection

@section('content')

    @include('dashboard.fragments._errors-form')

    <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf

        @include('dashboard.category._form', ['task' => 'edit'])

        <button type="submit">Send</button>
    </form>
@endsection