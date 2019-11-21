<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function create(Request $request)
    {
        $film = new Film();
        $film->name = $request->get('name');
        $film->poster = $request->get('poster');
        $film->thumbnail = $request->get('thumbnail');
        $film->year = $request->get('year');
        $film->duration = $request->get('duration');
        $film->description = $request->get('description');
        $film->save();
        $film->categories()->attach($request->get('categories'));
        return response()->json($film, 200);
    }

    public function getFilmById($id)
    {
        $film = Film::find($id);
        $film['categories'] = $film->categories;
        return response()->json($film, 200,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
    }

    public function edit(Request $request, $id)
    {
        $film = Film::find($id);
        $film->name = $request->get('name');
        $film->poster = $request->get('poster');
        $film->thumbnail = $request->get('thumbnail');
        $film->year = $request->get('year');
        $film->duration = $request->get('duration');
        $film->description = $request->get('description');
        $film->save();
        $film->categories()->detach();
        $film->categories()->attach($request->get('categories'));
        return response()->json($film, 200);
    }

    public function delete($id)
    {
        $film = Film::find($id);
        $film->delete();
        return response('Ok', 200);
    }
}
