@extends('layouts.app')

@section('content')
    <a href="/posts" style="position: absolute; margin-left: 62%;"><button class="btn btn-default" style="color: rgb(46,124,246);">Go Back</button></a>
    <h1 style="margin-top:80px;">{{$post->title}}</h1>
    <img style="width: 50%;height: 50%;" src="/storage/cover_images/{{$post->cover_image}}">
    <br>
    <br>
    <div style="margin-top:3%;">
        {{$post->body}}
    </div>
    <hr>
    <small>{{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit"><button class="btn btn-default" style="color: rgb(46,124,246); margin-bottom:10px;">Edit</button></a>

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection