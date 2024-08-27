@extends('dashboard.master')

@section('title')
    Category|Show
@endsection

@section('content')
    <h1><span>Title: {{ $category->title }}</span></h1>
    <span>Slug: {{ $category->slug }}</span> <br>
@endsection