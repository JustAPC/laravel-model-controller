@extends('layouts.layout')

@section('content')
    @foreach ($movies as $key => $movie)
        <div>{{ $movie->title }}</div>
        <div>{{ $movie->vote }}</div>
    @endforeach
@endsection
