@extends('dashboard.master')

@section('title')
    Post|Show
@endsection

@section('content')
    <h1><span>Title: {{ $post->title }}</span></h1>
    <span>Slug: {{ $post->slug }}</span> <br>
    <span>Content: {{ $post->content }}</span> <br>
    <span>Category: {{ $post->category->title }}</span> <br>
    <span>Description: {{ $post->description }}</span> <br>
    @if ($post->image)
        <img src="/uploads/post/{{ $post->image }}" width="250px">
    @else
        <span>No image</span>
    @endif
@endsection