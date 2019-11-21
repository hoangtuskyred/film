<?php

namespace App\Http\Controllers;

use App\Category;
use App\Film;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.pages.index');
    }

    public function films()
    {
        $films = Film::orderBy('id', 'desc')->paginate(5);
        $categories = Category::all();
        return view('admin.films.list', compact('films', 'categories'));
    }
}
