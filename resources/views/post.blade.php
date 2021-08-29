{{-- @dd($post) --}}
{{-- @dd($title) --}}

@extends('layouts.main')

@section('container')

    <h2>{{ $post['title'] }}</h2>
    <p>{{ $post['body'] }}</p>



    <a href="/blog">back to post</a>
@endsection