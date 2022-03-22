@extends('layouts.main')

@section('content')
<h1>Comics</h1>
<div class="row text-center justify-content-center">
  @foreach ($comics as $comic)
  <dic class="col-5 p-3 m-3">
    <div class="card d-flex justify-content-center">
      <h3>{{$comic->title}}</h3>
      <figure><img src="{{$comic->thumb}}" width="150" alt="{{$comic->title}}"></figure>
      <h5>{{$comic->series}}</h5>
      <h5>{{$comic->sale_date}}</h5>
      <p>{{$comic->description}}</p>
      <div><strong>Prezzo: €{{$comic->price}}</strong></div>
    </div>
  </dic>
  @endforeach

</div>
@endsection