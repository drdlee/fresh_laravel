@extends('layouts.app')
@section('content')
  <a href="/posts" class="btn btn-default">go back</a>
  <h2>{{$post->title}}</h2>
  <small>Written on {{$post->created_at}}</small>
  <p>{!!$post->body!!}</p>
@endsection
