@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center" style="margin-top:80px;">
        <h1>{{$title}}</h1>
        <br>
        <h4>Login or Register to create posts!</h4>
        <br>
        <p>
            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
         </p>
         <br>
            <a class="btn btn-primary" href="/posts">View the latest posts</a>
    </div>
@endsection
