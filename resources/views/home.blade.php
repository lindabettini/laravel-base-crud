@extends('layouts.main')

@section('content')
<div class="text-center">
  <h1>Benvenuto</h1>
  <h3>Scopri tutti i nostri Comics!</h3>
  <a class="btn btn-primary m-3" href="{{route('comics.create')}}">Aggiungi un Comic</a>
  @endsection