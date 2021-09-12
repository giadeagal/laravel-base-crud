@extends('layouts.app')

@section('title', 'modifica un fumetto')
    
@section('content')
   <div class="container my-5 ">
    <div class="row">
        <div class="col-6 offset-3 bg-primary text-light rounded p-3">
            <h2 class="text-light">Modifica un prodotto</h2>
        <form action="{{route('comics.update', $comic->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="titolo">Titolo</label>
              <input type="text" name="title" class="form-control" id="titolo" placeholder="Inserisci un titolo"
              value="{{ $comic->title }}">
            </div>

            <div class="form-group">
                <label for="descrizione" class="form-label">Descrizione</label>
                <textarea name="description" id="descrizione" cols="30" rows="10" class="form-control" placeholder="Inserisci una descrizione">  {{ $comic->description }}</textarea>
              </div>

              <div class="form-group">
                <label for="immagine">Immagine</label>
                <input type="text" name="thumb" class="form-control" id="immagine" placeholder="Inserisci un percorso immagine" value="{{ $comic->thumb }}">
              </div>

              <div class="form-group">
                <label for="prezzo">Prezzo</label>
                <input type="text" name="price" class="form-control" id="prezzo" placeholder="Inserisci un prezzo" value="{{ $comic->price }}">
              </div>

              <div class="form-group">
                <label for="serie">Serie</label>
                <input type="text" name="series" class="form-control" id="serie" placeholder="Inserisci una serie" value="{{ $comic->series }}">
              </div>

              <div class="form-group">
                <label for="date">Data vendita</label>
                <input type="date" name="sale_date" class="form-control" id="date" placeholder="Inserisci una data" value="{{ $comic->sale_date }}">
              </div>

              <div class="form-group">
                <label for="tipo" class="py-3">Tipo</label>
                <select name="type" id="tipo">
                    <option value="comic book" {{ $comic->type === 'comic book' ? 'selected' : ''}}>Comic book</option>
                    <option value="graphic novel"{{ $comic->type === 'graphic novel' ? 'selected' : ''}}>Graphic novel</option>
                </select>
              </div>
        
            <button type="submit" class="btn btn-light my-3">Submit</button>
          </form>
        </div>
    </div>
   </div> 
@endsection