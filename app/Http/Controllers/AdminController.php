<?php

namespace App\Http\Controllers;

use App\Category;
use App\Episode;
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

    public function categories()
    {
        $categories = Category::orderBy('id', 'desc')->paginate(20);
        return view('admin.categories.list', compact('categories'));
    }

    public function episodes()
    {
        $episodes = Episode::orderBy('id', 'desc')->paginate(20);
        return view('admin.episodes.list', compact('episodes'));
    }
}
