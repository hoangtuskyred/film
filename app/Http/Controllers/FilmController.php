<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        return view('film.index');
    }

    public function detail($id)
    {
        return view('film.detail');
    }

    public function watch($id)
    {
        return view('film.watch');
    }
}
