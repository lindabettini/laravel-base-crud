@extends('layouts.main')
@section('content')
<div class="container">
  <header>
    <div class="card-title d-flex align-items-center justify-content-between">
      <h1>Modifica Scheda Comic</h1>
      <a class="btn btn-secondary" href="{{route('comics.index')}}">Indietro</a>
    </div>
  </header>
  <!-- *** FORM *** -->
  <div class="card-body">
    @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <!-- FORM  -->
    <form action="{{route('comics.update', $comic->id)}}" method="POST" novalidate>
      @method('PUT')
      @csrf
      <div class="row">
        <div class="col-10">
          <div class="mb-3">
            <label for="title" class="form-label">Inserisci titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}" required>
            <div id="titleHelp" class="form-text">Questo campo è obbligatorio</div>
          </div>
        </div>
        <div class="col-10">
          <div class="mb-3">
            <label for="thumb" class="form-label">Inserisci Url immagine di copertina</label>
            <input type="text" type="url" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
          </div>
        </div>
        <div class="col-10">
          <div class="mb-3">
            <label for="series" class="form-label">Inserisci la serie</label>
            <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
          </div>
        </div>
        <div class="col-10">
          <div class="mb-3">
            <label for="sale_date" class="form-label">Anno</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
          </div>
        </div>
        <div class="col-10">
          <div class="col-10">
            <div class="mb-3">
              <div class="mb-3">
                <label for="description" class="form-label">Descrizione:</label>
                <textarea class="form-control" id="description" name="description" rows="6">{{$comic->description}}</textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="col-10">
          <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}" required>
            <div id="priceHelp" class="form-text">Questo campo è obbligatorio</div>
          </div>
        </div>
      </div>
      <!-- ***Form buttons*** -->
      <div class="row align-content-center">
        <div class="col-6"> <button type="reset" class="btn btn-secondary m-3">Cancella</button>
          <button type="submit" class="btn btn-success m-3">Crea</button>
        </div>
        <div class="col-6">
          <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger m-3 btn-100">Elimina</button>
          </form>
        </div>
      </div>
  </div>
  </form>



</div>
</div>
@endsection