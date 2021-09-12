@extends ("layouts.app")

@section("title", "dettagli fumetto")

@section("content")
    <div class="container">

        <div class="row">
            <div class="col">
                <h1>{{ $comic->title }}</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" title="{{ $comic->title }}">
            </div>
            <div class="col">
                <p>{!! $comic->description !!}</p>
            </div>
        </div>
    </div>
@endsection