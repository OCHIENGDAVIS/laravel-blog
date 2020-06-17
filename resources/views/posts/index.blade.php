@extends('layouts.app')
@section('content')

<div class="row container">
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="col-md-4 card">
                <h3><a href="/posts/{{$post->id}}"> {{$post->title}} </a> </h3>
                <small>Published on :{{$post->created_at}}</small>
                <hr />

            </div>
        @endforeach
    @else 
    <h2>There are no posts to display</h2>
    @endif
</div>
@endsection