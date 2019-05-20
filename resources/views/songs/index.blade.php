@extends('layout.app')

@section('title','Songs')

@section('body')
  {{'songs are everything'}}
  @foreach($songs as $song)
      {{$song->title}}
  @endforeach
@endsection
