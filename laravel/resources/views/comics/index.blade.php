@extends('layouts.app')

@section('title', "Comics Admin")

@section("content")
    <div>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                  <th scope="col">Titolo</th>
                  <th scope="col">Descrizione</th>
                  <th scope="col">Prezzo</th>
                  <th scope="col">Serie</th>
                  <th scope="col">Data di vendita</th>
                  <th scope="col">Tipologia</th>
                  <th scope="col">Azioni</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>
                      <a href="" class="btn btn-primary">Show</a>
                      <a href="" class="btn btn-secondary">Edit</a>
                      <a href="" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
              </tbody>
        </table>
    </div>
@endsection