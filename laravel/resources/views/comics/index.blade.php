@extends('layouts.app')

@section('title', "Comics Admin")

@section("content")

    @if (session('modifica'))
        <div class="alert alert-warning">
          {{ session('modifica') }}
        </div>
    @endif

    @if (session('cancel'))
        <div class="alert alert-danger">
          {{ session('cancel') }}
        </div>
    @endif

    <div class="container">
        <table class="table table-light table-hover">
            <thead>
                <tr>
                  <th scope="col">Titolo</th>
                  
                  <th scope="col">Prezzo</th>
                  <th scope="col">Serie</th>
                  
                  <th scope="col">Tipologia</th>
                  <th scope="col">Azioni</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic->title }}</td>
                   
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    
                    <td>{{ $comic->type }}</td>
                    
                    <td>
                        <a href="{{ route('comics.show', [$comic->id]) }}" class="btn btn-primary">Dettagli</a>
                        <a href="{{ route('comics.edit', [$comic->id]) }}" class="btn btn-secondary">Modifica</a>
                        <form action="{{ route('comics.destroy', [$comic->id]) }}" method="POST" class="d-inline-block">
                          @csrf
                          @method('DELETE')
                          <input type="submit" value="Cancella" class="btn btn-danger">
                        </form>
                        
                    </td>
                  </tr>
                @endforeach
              </tbody>
        </table>

        <div id="links">
            {{ $comics->links() }}
        </div>
    </div>
@endsection