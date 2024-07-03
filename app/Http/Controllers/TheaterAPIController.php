<?php

namespace App\Http\Controllers;

use App\Models\Theater;
use Illuminate\Http\Request;

class TheaterAPIController extends Controller
{
    public function gettimeslot(Request $request)
    {
        $theater = Theater::all();

        return response()->json($theater);

    }
}
