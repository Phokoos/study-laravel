@extends('layouts.app')

@section('content')
    <h1>Edit post page</h1>
    <form method="post" action="/posts/{{$post->id}}">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="title" placeholder="Enter title " value="{{$post->title}}">
        <br>
        <br>
        <textarea name="content" placeholder="Enter your content" rows="10" cols="50">
            {{$post->content}}
        </textarea>
        <br>
        <br>
        <input type="submit" name="submit">
    </form>
    <form method="post" action="/posts/{{$post->id}}">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" name="DELETE" value="DELETE">
    </form>
@endsection
