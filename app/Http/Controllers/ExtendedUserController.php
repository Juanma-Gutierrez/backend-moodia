<?php

namespace App\Http\Controllers;

use App\Constants\ResponseMessages;
use Illuminate\Http\Request;
use App\Models\ExtendedUser;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;
use Illuminate\Support\Facades\Log;

class ExtendedUserController extends Controller
{
  protected $resource = "extendedUser";

  // Crear un nuevo registro de ExtendedUser
  public function create(Request $request)
  {
    $user = Auth::user();

    try {
      // Valida los datos de entrada
      $validated = $request->validate([
        'birthDate' => 'required|date',
        'idCivilStatus' => 'required|integer',
        'idGenre' => 'nullable|integer',
        'idRole' => 'required|integer',
        'idEmployment' => 'required|integer',
      ]);

      // Crea el registro en la tabla extended_user
      $extendedUser = ExtendedUser::create([
        'birthDate' => $validated['birthDate'],
        'idCivilStatus' => $validated['idCivilStatus'],
        'idGenre' => $validated['idGenre'],
        'idRole' => $validated['idRole'],
        'idEmployment' => $validated['idEmployment'],
        'idExtendedUser' => $user->id,
      ]);

      return response()->json(
        [
          ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::SUCCESS_FETCHED . $this->resource,
          ResponseMessages::RESPONSE_DATA => $extendedUser,
        ],
        201
      );
    } catch (\Exception $e) {
      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_CREATING . $this->resource,
        ResponseMessages::RESPONSE_ERROR => $e->getMessage(),
      ], 500);
    }
  }

  // Actualizar la información de ExtendedUser
  public function update(Request $request)
  {
    $user = Auth::user();

    try {
      // Valida los datos de entrada
      $validated = $request->validate([
        'idExtendedUser' => 'nullable|integer',
        'birthDate' => 'nullable|date',
        'idCivilStatus' => 'nullable|integer',
        'idGenre' => 'nullable|integer',
        'idRole' => 'nullable|integer',
        'idEmployment' => 'nullable|integer',
      ]);

      // Encuentra el registro de ExtendedUser del usuario autenticado
      $extendedUser = ExtendedUser::where('idExtendedUser', $user->idExtendedUser)->first();

      if (!$extendedUser) {
        return response()->json([
          ResponseMessages::ERROR => ResponseMessages::EXTENDED_USER_DATA_NOT_FOUND
        ], 404);
      }

      // Actualiza los campos
      $extendedUser->update(array_filter($validated));

      return response()->json([
        ResponseMessages::RESPONSE_DATA => $extendedUser
      ], 200);
    } catch (\Exception $e) {
      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_UPDATING . $this->resource,
        ResponseMessages::RESPONSE_ERROR => $e->getMessage(),
      ], 500);
    }
  }

  // Obtener la información extendida de un usuario
  public function show($id)
  {
    try {
      // Encuentra el registro de ExtendedUser por ID
      $data = ExtendedUser::where('id', $id)->first();

      Log::debug($data);
      return response()->json($data, 200);
    } catch (\Exception $e) {
      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_FETCHING . $this->resource,
        ResponseMessages::RESPONSE_ERROR => $e->getMessage(),
      ], 500);
    }
  }

  // Obtener la información extendida de un usuario
  public function getRole($idExtendedUser)
  {
    try {
      // // Encuentra el registro de ExtendedUser por ID
      $extendedUser = ExtendedUser::where('idExtendedUser', $idExtendedUser)->first();

      if (!$extendedUser) {
        return response()->json([
          ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::EXTENDED_USER_DATA_NOT_FOUND . $idExtendedUser,
        ], 404);
      }

      // Obtiene el rol asociado al idRole del ExtendedUser
      $role = Role::where('idRole', $extendedUser->idRole)->first();


      if (!$role) {
        return response()->json([
          ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ROLE_NOT_FOUND . $idExtendedUser,
        ], 404);
      }

      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::SUCCESS_FETCHED . $this->resource,
        ResponseMessages::RESPONSE_DATA => $role["role"],
      ], 200);
    } catch (\Exception $e) {
      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_FETCHING . $this->resource,
        ResponseMessages::RESPONSE_ERROR => $e->getMessage(),
      ], 500);
    }
  }
}
