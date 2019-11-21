<?php

namespace App\Http\Controllers;

use App\Episode;
use App\Film;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function getEpisodesWithFilmId($id)
    {
        $film = Film::find($id);
        $film['episodes'] = $film->episodes;
        return response()->json($film, 200,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
    }

    public function create(Request $request, $id)
    {
        $film = Film::find($id);
        $episode = new Episode();
        $episode->name = $request->get('name');
        $episode->url = $request->get('url');
        $film->episodes()->save($episode);
        return response('Ok', 200);
    }

    public function getEpisodeById($id)
    {
        $episode = Episode::find($id);
        return response()->json($episode, 200,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
    }

    public function edit(Request $request, $id)
    {
        $episode = Episode::find($id);
        $episode->name = $request->get('name');
        $episode->url = $request->get('url');
        $episode->save();
        return response()->json($episode, 200);
    }

    public function delete($id)
    {
        $episode = Episode::find($id);
        $episode->delete();
        return response('Ok', 200);
    }
}
