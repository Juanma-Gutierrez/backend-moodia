<?php

namespace App\Http\Controllers;

use App\Constants\ResponseMessages;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
  protected $resource = "user";

  public function getUsersWithAvgScores(Request $request): JsonResponse
  {
    try {
      $role = $request->input('role');

      if ($role !== 'Administrador') {
        return response()->json([
          ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_AUTHENTICATION,
        ], 403);
      }

      Log::debug($request);

      $users = User::with(['extendedUser', 'extendedUser.genre', 'extendedUser.employment', 'extendedUser.civilStatus', 'posts'])
        ->get()
        ->map(function ($user) {
          $averageScore = $user->posts->avg('score');

          return [
            'user' => $user->only(['id', 'name', 'email', 'created_at', 'updated_at']),
            'extendedUser' => $user->extendedUser,
            'averageScore' => number_format($averageScore, 1),
          ];
        });

      Log::debug($users);
      if ($users->isEmpty()) {
        return response()->json([
          ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_NOT_FOUND . $this->resource,
        ], 404);
      }

      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::SUCCESS_FETCHED . $this->resource,
        ResponseMessages::RESPONSE_DATA => $users,
      ], 200);
    } catch (\Exception $e) {
      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_FETCHING . $this->resource,
        ResponseMessages::RESPONSE_ERROR => $e->getMessage(),
      ], 500);
    }
  }
}
