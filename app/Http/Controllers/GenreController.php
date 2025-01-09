<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class GenreController extends Controller
{
  public function getGenres(Request $request): JsonResponse
  {
    $genres = Genre::select('idGenre', 'genre')->get();
      return response()->json($genres);
  }
}
