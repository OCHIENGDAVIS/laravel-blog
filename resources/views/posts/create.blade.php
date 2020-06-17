@extends('layouts.app')
@section('content')
    <h3>Create a post</h3>
    {!! Form::open(['action' => 'PostController@store', 'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '', ['class'=>'form-control', 'placeholder'=>'Body'])}}
    </div>
    <div class="form-group">
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
@endsection