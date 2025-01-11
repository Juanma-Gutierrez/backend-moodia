<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
  public function getCategory(Request $request): JsonResponse
  {
    $data = Category::select('idCategory', 'name')->get();
    return response()->json($data);
  }
}
