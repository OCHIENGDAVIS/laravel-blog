@extends('layouts.app')
@section('content')
 <h3>Edit a post</h3>
    {!! Form::open(['action' => ['PostController@update', $post->id], 'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title, ['class'=>'form-control', 'placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $post->body, ['class'=>'form-control', 'placeholder'=>'Body'])}}
    </div>
    <div class="form-group">
        {{Form::submit('Edit Post', ['class'=>'btn btn-primary'])}}
        {{FOrm::hidden('_method', 'PUT')}}
    </div>
    {!! Form::close() !!}
    
@endsection