<?php

namespace App\Http\Controllers;

use App\Constants\ResponseMessages;
use App\Models\Genre;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GenreController extends Controller
{
  public function getGenres(Request $request): JsonResponse
  {
    $resource = "genre";
    try {
      $data = Genre::select('idGenre', 'genre')->get();
      return response()->json([
        'success' => true,
        'message' => ResponseMessages::SUCCESS_FETCHED . $resource,
        'data' => $data,
      ], 200);
    } catch (\Exception $e) {
      return response()->json([
        'success' => false,
        'message' => ResponseMessages::ERROR_FETCHING . $resource,
        'error' => $e->getMessage(),
      ], 500);
    }
  }
}
