@extends('layouts.layout')

@section('title', 'Movie')

@section('content')
    <div class="container">
        <img src="{{ $movie->img }}" alt="" class="movie-img">
    </div>
@endsection
