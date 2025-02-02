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
  public function getAll(): JsonResponse
  {
    try {
      $phrases = InspiringPhrase::all();

      if (!$phrases) {
        return response()->json([
          ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_FETCHING . $this->resource,
        ], 404);
      }

      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::SUCCESS_FETCHED . $this->resource,
        ResponseMessages::RESPONSE_DATA => $phrases,
      ], 200);
    } catch (\Exception $e) {
      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_FETCHING . $this->resource,
        ResponseMessages::RESPONSE_ERROR => $e->getMessage(),
      ], 500);
    }
  }
  /**
   * Obtener una frase específica por su ID.
   *
   * @param int $idInspiringphrase
   * @return JsonResponse
   */
  public function get(int $idInspiringphrase): JsonResponse
  {
    try {
      $phrase = InspiringPhrase::find($idInspiringphrase);

      if (!$phrase) {
        return response()->json([
          ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_NOT_FOUND . $this->resource,
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
