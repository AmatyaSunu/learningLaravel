@extends('layout.app')

@section('body')
  {{$song->title}}<br>
  By  {{$song->artist}}
@endsection
