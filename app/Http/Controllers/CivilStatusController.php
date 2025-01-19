<?php

namespace App\Http\Controllers;

use App\Constants\ResponseMessages;
use App\Models\CivilStatus;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CivilStatusController extends Controller
{
  protected $resource = "civil status";

  public function getCivilStatus(Request $request): JsonResponse
  {
    try {
      $data = CivilStatus::select('idCivilStatus', 'status')->get();
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
