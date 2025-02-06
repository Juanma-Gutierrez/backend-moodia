<?php

namespace App\Http\Controllers;

use App\Constants\ResponseMessages;
use App\Models\Challenge;
use Illuminate\Http\JsonResponse;

class ChallengeController extends Controller
{
  protected $resource = "challenge";

  public function getAllChallenges(): JsonResponse
  {
    try {
      $data = Challenge::all();

      if ($data->isEmpty()) {
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
