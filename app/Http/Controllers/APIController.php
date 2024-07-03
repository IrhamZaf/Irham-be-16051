<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\NewMovie;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class APIController extends Controller
{
    // public function create(Request $request)
    // {
    //     $movies = new Movie();

    //     $movies->title = $request->input('title');
    //     $movies->duration = $request->input('duration');
    //     $movies->views = $request->input('views');
    //     $movies->poster = $request->input('poster');
    //     $movies->overallrating = $request->input('overallrating');
    //     $movies->description = $request->input('description');

    //     $movies->save();
    //     return response()->json($movies);
    // }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'duration' => 'required|integer',
            'views' => 'required|integer',
            'poster' => 'required|string|max:255',
            'overallrating' => 'required|numeric',
            'description' => 'required|string',
        ]);

        $movie = Movie::create($validatedData);

        return response()->json($movie, 201);
    }

    public function getmovie(Request $request)
    {
        $movies = Movie::all();

        return response()->json($movies);
    }

    public function show($id)
    {
        try {
            $movie = Movie::findOrFail($id);

            return response()->json($movie);
        }  catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Movie not found'], 404);
        }
    }

    

}
