<?php

namespace App\Http\Controllers;

use App\Constants\ResponseMessages;
use App\Models\Genre;
use Illuminate\Http\JsonResponse;

class GenreController extends Controller
{
  protected $resource = "genre";

  public function getAllGenres(): JsonResponse
  {
    try {
      $data = Genre::all();

      if (!$data) {
        return response()->json([
          ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_NOT_FOUND . $this->resource,
        ], 404);
      }

      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::SUCCESS_FETCHED . $this->resource,
        ResponseMessages::RESPONSE_DATA => $data,
      ], 200);
    } catch (\Exception $e) {
      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_FETCHING . $this->resource,
        ResponseMessages::RESPONSE_ERROR => $e->getMessage(),
      ], 500);
    }
  }
}
