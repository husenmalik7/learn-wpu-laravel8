{{-- @dd($post) --}}
{{-- @dd($title) --}}

@extends('layouts.main')

@section('container')

    <h2>{{ $post->title }}</h2>

    {{-- verse 1 --}}
    {{-- <p>by who in {{ $post->category->name }}</p> --}}

    {{-- verse 2, clickable --}}
    <p>by who in 
        <a href="/categories/{{ $post->category->slug }}">
        {{ $post->category->name }}
        </a>
    </p>


    {{-- {{ $post->body }} --}}
    {{-- not running html tag --}}


    {!! $post->body !!} 
    {{-- running html tag --}}
    <br>

    <a href="/blog">back to post</a>
@endsection

