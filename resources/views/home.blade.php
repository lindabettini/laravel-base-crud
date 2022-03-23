@extends('layouts.main')

@section('content')
<div class="text-center">
  <h1 class="m-3">Benvenuto</h1>
  <h4 class="m-3"><a href="{{route('comics.index')}}">Comics che devi leggere!!</a></h4>

  <ul class="list-unstyled">
    @foreach ($comics as $comic)
    <li>{{$comic->title}}</li>
    @endforeach
  </ul>

  <a class="btn btn-primary m-3" href="{{route('comics.create')}}">Aggiungi un Comic</a>
  @endsection