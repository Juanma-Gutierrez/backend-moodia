<?php

namespace App\Http\Controllers;

use App\Constants\ResponseMessages;
use App\Models\CivilStatus;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CivilStatusController extends Controller
{
  public function getCivilStatus(Request $request): JsonResponse
  {
    $resource = "civil status";
    try {
      $data = CivilStatus::select('idCivilStatus', 'status')->get();
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
