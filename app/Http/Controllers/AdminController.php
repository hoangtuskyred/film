<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::all();
        return view('admin.index', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $film = new Film();
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
        $film = Film::find($id);
        return $film;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film = Film::find($id);
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
        $film = Film::find($id);
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
        $film = Film::find($id);
        $film->delete();
    }

    public function restore($id)
    {
        Film::withTrashed()->find($id)->restore();
    }
}
