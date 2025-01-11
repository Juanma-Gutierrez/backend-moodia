<?php

namespace App\Http\Controllers;

use App\Constants\ResponseMessages;
use App\Models\Employment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EmploymentController extends Controller
{
  public function getEmployment(Request $request): JsonResponse
  {
    $resource = "employment";
    try {
      $data = Employment::select('idEmployment', 'employment')->get();
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
