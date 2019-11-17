<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        return view('film.index');
    }

    public function detail()
    {
        return view('film.detail');
    }
}
