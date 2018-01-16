@extends('layouts.app')
@section('content')
  <h3>Edit Post</h3>
  {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
    <div class="form-group">
      {{form::label('title', 'Title')}}
      {{form::text('title', $post->title, ['class'=> 'form-control', 'placeholder'=> 'Title'])}}
    </div>
    <div class="form-group">
      {{form::label('body', 'Content')}}
      {{form::textarea('body', $post->body, ['id'=> 'article-ckeditor','class'=> 'form-control', 'placeholder'=> 'Content'])}}
    </div>
    {{form::hidden('_method','PUT')}}
    {{form::submit('Submit', ['class'=>'btn btn-primary'])}}
  {!! Form::close() !!}
@endsection
