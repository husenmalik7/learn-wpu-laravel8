{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
    <h1>posts page</h1>    
    <br>

    @foreach ($posts as $post) 
        <article class="mb-5">
            {{-- <h2>{{ $post['title'] }}</h2> --}}
            <h2>
                {{-- <a href="posts/{{ $post->id }}"> --}}
                    {{-- use id --}}

                <a href="posts/{{ $post->slug }}">
                    {{-- use slug --}}
                    {{ $post->title }}
                </a>
            </h2>

            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach


@endsection
