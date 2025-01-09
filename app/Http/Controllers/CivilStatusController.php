<?php

namespace App\Http\Controllers;

use App\Models\CivilStatus;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CivilStatusController extends Controller
{
  public function getCivilStatus(Request $request): JsonResponse
  {
    $data = CivilStatus::select('idCivilStatus', 'status')->get();
    return response()->json($data);
  }
}
