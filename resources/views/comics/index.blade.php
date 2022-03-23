@extends('layouts.main')

@section('content')
<header class="d-flex justify-content-evenly">
  <h1>Comics</h1>
  <a class="btn btn-primary m-3" href="{{route('comics.create')}}">Aggiungi un Comic</a>
</header>

<div id="comics-list" class="row text-center justify-content-center">
  @foreach ($comics as $comic)
  <dic class="col-5 p-3 m-3">
    <a href="{{route('comics.show', $comic->id)}}">
      <div class="card p-3 d-flex justify-content-center">
        <h3>{{$comic->title}}</h3>
        <figure><img src="{{$comic->thumb}}" width="150" alt="{{$comic->title}}"></figure>
        <h5>{{$comic->series}}</h5>
        <h5>{{$comic->sale_date}}</h5>
        <p>{{$comic->description}}</p>
        <div><strong>Prezzo: €{{$comic->price}}</strong></div>
        <div class="row justify-content-evenly">
          <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-primary m-3 btn-100">Modifica</a>
          <a href="{{route('comics.index', $comic->id)}}" class="btn btn-danger m-3 btn-100">Elimina</a>
        </div>
      </div>
    </a>
  </dic>
  @endforeach
</div>
@endsection