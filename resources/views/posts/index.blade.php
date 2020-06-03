@extends('layouts.app')

@section('content')
    <a href="{{ url ('/posts/create') }}" class="btn btn-primary" role="button">Create Post</a>
    <br>
    <br>
    <h3>Posts</h3>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="">
            <h3><a href={{ url ("/posts/{$post->id}") }}>{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
        <hr>
        {{$posts->links()}}
    @else 
        <div> NO Post Found!!</div>
    @endif
@endsection