<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('landingPages.index', compact('movies'));
    }

    public function show($id)
    {
        $movies = Movie::all();
        $movie = Movie::findOrFail($id);

        return view('landingPages.show', compact('movie', 'movies'));
    }
}
