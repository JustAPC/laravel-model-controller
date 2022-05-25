@extends('layouts.layout')

@section('title', 'Movie')

@section('content')
    <div class="container pt-5">
        <div class="row justify-content-between">
            <div class="col-5 fs-4 text-white">
                <p><strong>Titolo: </strong>{{ $movie->title }}</p>
                <p><strong>Titolo originale: </strong>{{ $movie->original_title }}</p>
                <p><strong>Produzione: </strong><span class="text-capitalize">{{ $movie->nationality }}</span></p>
                <p><strong>Data di rilascio: </strong>{{ $movie->date }}</p>
                <p><strong>Voto: </strong>{{ $movie->vote }}</p>
            </div>
            <div class="col-5 col-offset-2 text-end">
                <img src="{{ $movie->img }}" alt="" class="movie-img">
            </div>
        </div>
        <div class="text-center pt-5">

            <iframe width="800" height="450" src="{{ $movie->trailer }}" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>
@endsection
