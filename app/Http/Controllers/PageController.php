<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('landingPages.index', compact('movie'));
    }

    public function show($id)
    {

        $movies = Movie::findOrFail($id);

        return view('landingPages.show', compact('movie'));
    }
}
