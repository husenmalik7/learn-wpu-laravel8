{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
    <h1>posts page</h1>    
    <br>

    @foreach ($posts as $post) 
        <article class="mb-5 border-bottom pb-4">
            {{-- <h2>{{ $post['title'] }}</h2> --}}
            <h2>
                {{-- <a href="posts/{{ $post->id }}"> --}}
                    {{-- use id --}}

                <a href="posts/{{ $post->slug }}" class="text-decoration-none">
                    {{-- use slug --}}
                    {{ $post->title }}
                </a>
            </h2>
            <p>by 
                <a href="#">{{ $post->user->name }}</a>
                <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">
                {{ $post->category->name }}
                </a>
            </p>

            <p>{{ $post->excerpt }}</p>


            <a href="posts/{{ $post->slug }}" class="text-decoration-none">
                Read more
            </a>
        </article>
    @endforeach


@endsection
