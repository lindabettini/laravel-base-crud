@extends('layouts.main')

@section('content')

<div class="container">
  <div id="comics-list" class="row text-center justify-content-center">
    <div class="card p-3 d-flex justify-content-center">
      <h3>{{$comic->title}}</h3>
      <figure><img src="{{$comic->thumb}}" width="250" alt="{{$comic->title}}"></figure>
      <h5>{{$comic->series}}</h5>
      <h5>{{$comic->sale_date}}</h5>
      <p>{{$comic->description}}</p>
      <div><strong>Prezzo: €{{$comic->price}}</strong></div>
      <a class="btn btn-secondary" href="{{route('comics.index')}}">Indietro</a>
    </div>
  </div>
</div>

@endsection