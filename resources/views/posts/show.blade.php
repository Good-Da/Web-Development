@extends('layouts.app')

@section('content')
    
    <a href="{{ url ('/posts') }}" class="btn btn-info" role="button">Go back</a>
    <h3>{{$post->title}}</h3>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>

@endsection