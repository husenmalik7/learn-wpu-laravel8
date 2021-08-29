{{-- @dd($posts) --}}


@extends('layouts.main')


@section('container')
    <h1>post page</h1>
    
    <br>




    @foreach ($posts as $post) 
        <article class="mb-5">
            {{-- <h2>{{ $post['title'] }}</h2> --}}
            <h2>
                <a href="posts/{{ $post["slug"] }}">
                    {{ $post['title'] }}
                </a>
            </h2>


            <p>{{ $post['body'] }}</p>
        </article>
    @endforeach


@endsection
