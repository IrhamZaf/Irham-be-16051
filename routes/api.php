<?php

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
use App\Http\Controllers\TheaterAPIController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('/Movie','APIController@create');

Route::post('add-movie', [APIController::class, 'create']);
Route::get('new-movie', [APIController::class, 'getmovie']);
Route::get('movie/{id}', [APIController::class, 'show']);
Route::get('theater-timeslot', [TheaterAPIController::class, 'gettimeslot']);

