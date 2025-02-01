<?php

namespace App\Http\Controllers;

use App\Constants\ResponseMessages;
use App\Models\InspiringPhrase;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class InspiringPhraseController extends Controller
{
  protected $resource = "inspiring phrase";

  /**
   * Obtener una frase específica por su ID.
   *
   * @param Request $request
   * @param int $id
   * @return JsonResponse
   */
  public function get(): JsonResponse
  {
    try {
      $phrase = InspiringPhrase::all();

      if (!$phrase) {
        return response()->json([
          ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_FETCHING . $this->resource,
        ], 404);
      }

      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::SUCCESS_FETCHED . $this->resource,
        ResponseMessages::RESPONSE_DATA => $phrase,
      ], 200);
    } catch (\Exception $e) {
      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_FETCHING . $this->resource,
        ResponseMessages::RESPONSE_ERROR => $e->getMessage(),
      ], 500);
    }
  }
}
