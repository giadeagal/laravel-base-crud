@extends('layouts.app')

@section('title', 'aggiungi un fumetto')
    
@section('content')
   <div class="container my-5 ">
    <div class="row">
        <div class="col-6 offset-3 bg-primary text-light rounded p-3">
            <h2 class="text-light">Inserisci un prodotto</h2>
        <form action="{{ route('comics.store')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="titolo">Titolo</label>
              <input type="text" name="title" class="form-control" id="titolo" placeholder="Inserisci un titolo">
            </div>

            <div class="form-group">
                <label for="descrizione" class="form-label">Descrizione</label>
                <textarea name="description" id="descrizione" cols="30" rows="10" class="form-control" placeholder="Inserisci una descrizione"></textarea>
              </div>

              <div class="form-group">
                <label for="immagine">Immagine</label>
                <input type="text" name="thumb" class="form-control" id="immagine" placeholder="Inserisci un percorso immagine">
              </div>

              <div class="form-group">
                <label for="prezzo">Prezzo</label>
                <input type="text" name="price" class="form-control" id="prezzo" placeholder="Inserisci un prezzo">
              </div>

              <div class="form-group">
                <label for="serie">Serie</label>
                <input type="text" name="series" class="form-control" id="serie" placeholder="Inserisci una serie">
              </div>

              <div class="form-group">
                <label for="date">Data vendita</label>
                <input type="date" name="sale_date" class="form-control" id="date" placeholder="Inserisci una data">
              </div>

              <div class="form-group">
                <label for="tipo" class="py-3">Tipo</label>
                <select name="type" id="tipo">
                    <option value="comic book">Comic book</option>
                    <option value="graphic novel">Graphic novel</option>
                </select>
              </div>
        
            <button type="submit" class="btn btn-light my-3">Submit</button>
          </form>
        </div>
    </div>
   </div> 
@endsection