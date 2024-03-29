@extends('layout.main')

@section('container')

    <h1 class="mb-5">{{ $post->title }}</h1>
    
    <p>By. <a href="/author/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> <a href="/categories/{{ $post->category->slug}}" class="text-decoration-none">{{ $post->category->name }}</a></p>

    {!! $post ->body !!}

    <a href="/posts" class="d-block mt-3">Back to Post</a>
@endsection