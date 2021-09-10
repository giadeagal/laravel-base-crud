@extends('layouts.app')

@section('title', "Comics Admin")

@section("content")
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
                        <a href="{{ route('comics.show', [$comic->id]) }}" class="btn btn-primary">Show</a>
                        <a href="" class="btn btn-secondary">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
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