@extends('layouts.app')
@section('content')
    <div class="card">
        <h3>{{$post->title}} </h3>
        <small> published on:{{$post->created_at}}</small> 
        <p>
            {{$post->body}}
        </p>
        <a href="/posts/{{$post->id}}/edit" class="">Edit this post</a>

    </div>
@endsection