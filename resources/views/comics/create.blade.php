@extends('layouts.main')
@section('content')
<div class="container">
  <header>
    <div class="card-title d-flex align-items-center justify-content-between">
      <h1>Crea Scheda Comic</h1>
      <a class="btn btn-secondary" href="{{route('comics.index')}}">Indietro</a>
    </div>
  </header>
  <div class="card-body">
    <form action="" method="">
      <div class="row">
        <div class="col-10">
          <div class="mb-3">
            <label for="title" class="form-label">Inserisci titolo</label>
            <input type="text" class="form-control" id="title" name="title" required>
            <div id="titleHelp" class="form-text">Questo campo è obbligatorio</div>
          </div>
        </div>
        <div class="col-10">
          <div class="mb-3">
            <label for="thumb" class="form-label">Inserisci Url immagine</label>
            <input type="text" type="url" class="form-control" id="thumb" name="thumb">
          </div>
        </div>
        <div class="col-10">
          <div class="mb-3">
            <label for="series" class="form-label">Inserisci la serie</label>
            <input type="text" class="form-control" id="series" name="series">
          </div>
        </div>
        <div class="col-10">
          <div class="mb-3">
            <label for="sale_date" class="form-label">Anno</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date">
          </div>
        </div>
        <div class="col-10">
          <div class="col-10">
            <div class="mb-3">
              <div class="mb-3">
                <label for="description" class="form-label">Example textarea</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="col-10">
          <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" required>
            <div id="priceHelp" class="form-text">Questo campo è obbligatorio</div>
          </div>
        </div>
      </div>
      <div class="d-flex align-content-center justify-content-end">
        <button type="reset" class="btn btn-secondary m-3">Cancella</button>
        <button type="submit" class="btn btn-success m-3">Crea</button>
      </div>
    </form>
  </div>
</div>
@endsection


<!-- <div class="col-10">
        <div class="col-6">
          series
        </div>
        <div class="col-6">
          sale_date
        </div>
        <div class="col-6">
          description
        </div>
        <div class="col-6">
          price
        </div> -->