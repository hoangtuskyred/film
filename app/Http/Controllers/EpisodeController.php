<?php

namespace App\Http\Controllers;

use App\Episode;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{

    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $film = new Episode();
        $film->name = $request->get('name');
        $film->poster = $request->get('poster');
        $film->thumbnail = $request->get('thumbnail');
        $film->year = $request->get('year');
        $film->duration = $request->get('duration');
        $film->description = $request->get('description');
        $film->save();
        return response()->json([
            "mas" => "ok",
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film = Episode::find($id);
        return view('admin.edit', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $film = Episode::find($id);
        $film->name = $request->get('name');
        $film->poster = $request->get('poster');
        $film->thumbnail = $request->get('thumbnail');
        $film->year = $request->get('year');
        $film->duration = $request->get('duration');
        $film->description = $request->get('description');
        $film->save();
        return response()->json([
            "mas" => "ok",
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film = Episode::find($id);
        $film->delete();
    }

}
