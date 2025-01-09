<?php

namespace App\Http\Controllers;

use App\Models\Employment;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class EmploymentController extends Controller
{
  public function getEmployment(Request $request): JsonResponse
  {
    $data = Employment::select('idEmployment', 'employment')->get();
    return response()->json($data);
  }
}
