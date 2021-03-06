@extends('layouts.app')
@section('content')
  <h3>Add New Post</h3>
  {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
      {{form::label('title', 'Title')}}
      {{form::text('title', '', ['class'=> 'form-control', 'placeholder'=> 'Title'])}}
    </div>
    <div class="form-group">
      {{form::label('body', 'Content')}}
      {{form::textarea('body', '', ['id'=> 'article-ckeditor','class'=> 'form-control', 'placeholder'=> 'Content'])}}
    </div>
    {{form::submit('Submit', ['class'=>'btn btn-primary'])}}
  {!! Form::close() !!}
@endsection
