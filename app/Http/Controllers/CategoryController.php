<?php

namespace App\Http\Controllers;

use App\Constants\ResponseMessages;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function getCategory(Request $request): JsonResponse
  {
    $resource = "category";
    try {
      $data = Category::select('idCategory', 'name')->get();
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
