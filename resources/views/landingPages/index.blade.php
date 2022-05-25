@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    <div class="container mt-5">
        <div class="row row-cols-4 g-2 mx-auto">
            @foreach ($movies as $key => $movie)
                <div class="col">
                    <div class="card mb-5" style="width: 18rem; height: 350px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                            <p class="card-text">{{ $movie->description }}</p>
                            <a href="{{ route('movie', ['id' => $movie->id]) }}" class="card-link">Vai al film</a>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection
