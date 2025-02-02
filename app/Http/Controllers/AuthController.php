<?php

namespace App\Http\Controllers;

use App\Constants\ResponseMessages;
use App\Http\Controllers\Controller;
use App\Models\ExtendedUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
  public function register(Request $request)
  {
    try {
      // Inicia la transacción
      DB::beginTransaction();

      // ************************************PRIMERA PARTE***********************
      // Validar datos del usuario
      $validatedUser = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|confirmed|min:8',
      ]);

      // Crear el usuario en la tabla `users`
      $user = User::create([
        'name' => $validatedUser['name'],
        'email' => $validatedUser['email'],
        'password' => Hash::make($validatedUser['password']),
      ]);

      // ************************************SEGUNDA PARTE***********************
      // Validar datos del extendedUser
      $validatedExtendedUser = $request->validate([
        'birthDate' => 'required|date',
        'idCivilStatus' => 'required|integer',
        'idGenre' => 'nullable|integer',
        'idRole' => 'required|integer',
        'idEmployment' => 'required|integer',
      ]);

      // Crear el registro en la tabla `extended_user`
      $extendedUser = ExtendedUser::create([
        'id' => $user->id,
        'birthDate' => $validatedExtendedUser['birthDate'],
        'idCivilStatus' => $validatedExtendedUser['idCivilStatus'],
        'idGenre' => $validatedExtendedUser['idGenre'],
        'idRole' => $validatedExtendedUser['idRole'],
        'idEmployment' => $validatedExtendedUser['idEmployment'],
        'idInspiringPhrase' => $validatedExtendedUser['idInspiringPhrase'] ?? null,
      ]);

      // ************************************TERCERA PARTE***********************
      // return response()->json(auth()->user());
      $credentials = request(['email', 'password']);

      if (!$token = auth()->attempt($credentials)) {
        return response()->json([
          ResponseMessages::RESPONSE_ERROR => ResponseMessages::UNAUTHORIZED
        ], 401);
      }

      // Confirmar la transacción
      DB::commit();

      // Retornar la respuesta exitosa con ambos datos
      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::SUCCESS_FETCHED,
        "user" => $user,
        "extendedUser" => $extendedUser,
        "token" => $token,
      ], 200);
    } catch (\Exception $e) {
      // Revertir la transacción en caso de error
      DB::rollBack();
      Log::error('Error during registration: ' . $e->getMessage());
      // Retornar la respuesta de error
      return response()->json([
        'message' => 'An error occurred during the registration process.',
        'error' => $e->getMessage(),
      ], 500);
    }
  }

  /**
   * Get a JWT via given credentials.
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function login()
  {
    $credentials = request(['email', 'password']);

    if (!$credentials) {
      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_NOT_FOUND . "Login",
      ], 404);
    }

    if (!$token = auth()->attempt($credentials)) {
      return response()->json([
        ResponseMessages::RESPONSE_ERROR => ResponseMessages::UNAUTHORIZED
      ], 401);
    }

    return $this->respondWithToken($token);
  }

  /**
   * Get the authenticated User.
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function me()
  {
    return response()->json(auth()->user());
  }

  /**
   * Log the user out (Invalidate the token).
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function logout()
  {
    auth()->logout();

    return response()->json([
      ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::LOGOUT_SUCCESS
    ]);
  }

  /**
   * Get the token array structure.
   *
   * @param  string $token
   *
   * @return \Illuminate\Http\JsonResponse
   */
  protected function respondWithToken($token)
  {
    return response()->json([
      'access_token' => $token,
      'token_type' => 'bearer',
    ]);
  }
}
