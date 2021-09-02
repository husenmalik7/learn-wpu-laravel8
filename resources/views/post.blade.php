{{-- @dd($post) --}}
{{-- @dd($title) --}}

@extends('layouts.main')

@section('container')

    <h2>{{ $post->title }}</h2>

    {{-- {{ $post->body }} --}}
    {{-- not running html tag --}}


    {!! $post->body !!} 
    {{-- running html tag --}}

    <a href="/blog">back to post</a>
@endsection

