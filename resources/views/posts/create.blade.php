@extends('layouts.app')

@section('content')
    <h1>Create post page</h1>
{{--    <form method="post" action="/posts">--}}
{{--        @csrf--}}
    {!! Form::open(['method'=>'post', 'route'=>'posts.store']) !!}

        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
            <br>
            <br>
            {!! Form::label('content', 'Content:') !!}
            <br>
            {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => 4]) !!}
            <br>
            <br>
            {!! Form::submit('Create post', ['class'=>'btn btn-primary']) !!}
        </div>


{{--        <input type="text" name="title" placeholder="Enter title ">--}}
{{--        <br>--}}
{{--        <br>--}}
{{--        <textarea name="content" placeholder="Enter your content" rows="10" cols="50"></textarea>--}}
{{--        <br>--}}
{{--        <br>--}}
{{--        <input type="submit" name="submit">--}}
    {!! Form::close() !!}

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection
