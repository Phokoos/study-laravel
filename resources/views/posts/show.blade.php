@extends('layouts.app')

@section('content')
    <h1>Show post page</h1>
    <a href="{{route('posts.edit', $post->id)}}">{{$post->title}}</a>
    <br>
    @php
        echo $post->content
    @endphp

@endsection
