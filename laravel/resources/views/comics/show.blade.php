@extends ("layouts.app")

@section("title", "dettagli fumetto")

@section("content")
    <div class="container">

        <div class="row">
            <div class="col text-center">
                <h1 class="py-5">{{ $comic->title }}</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" >
            </div>
            <div class="col">
                <p>{!! $comic->description !!}</p>
            </div>
        </div>

        <div class="row">
            <div class="col mt-2 mb-5">
                <div class="badge bg-primary">
                    {{ $comic->type}}
                </div>
                
                <div class="badge bg-success" title="{{ $comic->title }}">
                    {{ $comic->price . " €" }}
                </div>

            </div>
        </div>
    </div>
@endsection