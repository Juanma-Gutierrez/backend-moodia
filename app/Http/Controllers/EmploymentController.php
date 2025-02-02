<?php

namespace App\Http\Controllers;

use App\Constants\ResponseMessages;
use App\Models\Employment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EmploymentController extends Controller
{
  protected $resource = "employment";

  public function getEmployment(Request $request): JsonResponse
  {
    try {
      $data = Employment::select('idEmployment', 'employment')->get();

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
