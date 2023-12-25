@extends('layouts.app')

@section('content')
    <h1>Create post page</h1>
    <form method="post" action="/posts">
        @csrf
        <input type="text" name="title" placeholder="Enter title ">
        <br>
        <br>
        <textarea name="content" placeholder="Enter your content" rows="10" cols="50"></textarea>
        <br>
        <br>
        <input type="submit" name="submit">
    </form>


@endsection
