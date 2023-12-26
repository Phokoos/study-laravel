@extends('layouts.app')

@section('content')
    <h1>Edit post page</h1>
{{--    <form method="post" action="/posts/{{$post->id}}">--}}
{{--        @csrf--}}
{{--        <input type="hidden" name="_method" value="PUT">--}}
{{--        <input type="text" name="title" placeholder="Enter title " value="{{$post->title}}">--}}
{{--        <br>--}}
{{--        <br>--}}
{{--        <textarea name="content" placeholder="Enter your content" rows="10" cols="50">--}}
{{--            {{$post->content}}--}}
{{--        </textarea>--}}
{{--        <br>--}}
{{--        <br>--}}
{{--        <input type="submit" name="submit">--}}
{{--    </form>--}}
    {!! Form::open(['method'=>'put', 'url'=>"/posts/$post->id"]) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', $post->title, ['class'=>'form-control']) !!}
            <br>
            <br>
            {!! Form::label('content', 'Content:') !!}
            <br>
            {!! Form::textarea('content', $post->content, ['class' => 'form-control', 'rows' => 4]) !!}
            <br>
            <br>
            {!! Form::submit('Update post', ['class'=>'btn btn-primary']) !!}
            <br>
            <br>
        </div>
    {!! Form::close() !!}
    {!! Form::open(['method'=>'delete', 'url'=>"/posts/$post->id"]) !!}
        <div class="form-group">
            {!! Form::submit('Delete post') !!}
        </div>
    {!! Form::close() !!}
@endsection
