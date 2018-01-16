@extends('layouts.app')
@section('content')
  <a href="/posts" class="btn btn-default">go back</a>
  <h2>{{$post->title}}</h2>
  <small>Written on {{$post->created_at}} by. {{$post->user->name}}</small>
  <p>{!!$post->body!!}</p>
  <hr>
  @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
      <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
      {!!Form::open(['action'=> ['PostsController@destroy', $post->id], 'method'=> 'POST', 'class'=> 'pull-right'])!!}
        {{form::hidden('_method', 'DELETE')}}
        {{form::submit('Delete', ['class'=>'btn btn-danger'])}}
      {!!Form::close()!!}
    @endif
  @endif
@endsection
