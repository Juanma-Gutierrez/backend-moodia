<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExtendedUser;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;

class ExtendedUserController extends Controller
{
  // Crear un nuevo registro de ExtendedUser
  public function create(Request $request)
  {
    $user = Auth::user();  // Obtén el usuario autenticado

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

    return response()->json(['success' => true, 'data' => $extendedUser], 201);
  }

  // Actualizar la información de ExtendedUser
  public function update(Request $request)
  {
    $user = Auth::user();  // Obtén el usuario autenticado

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
      return response()->json(['error' => 'No se encontró la información extendida del usuario'], 404);
    }

    // Actualiza los campos
    $extendedUser->update(array_filter($validated));

    return response()->json(['success' => true, 'data' => $extendedUser]);
  }

  // Obtener la información extendida de un usuario
  public function show($idExtendedUser)
  {
    // Encuentra el registro de ExtendedUser por ID
    $extendedUser = ExtendedUser::where('idExtendedUser', $idExtendedUser)->first();

    if (!$extendedUser) {
      return response()->json(['error' => "No se ha encontrado la informacion extendida del usuario {$idExtendedUser}"], 404);
    }

    return response()->json(['success' => true, 'data' => $extendedUser]);
  }

  // Obtener la información extendida de un usuario
  public function getRole($idExtendedUser)
  {
    // // Encuentra el registro de ExtendedUser por ID
    $extendedUser = ExtendedUser::where('idExtendedUser', $idExtendedUser)->first();

    if (!$extendedUser) {
      return response()->json(['error' => "No se ha encontrado la información extendida del usuario {$idExtendedUser}"], 404);
    }

    // Obtiene el rol asociado al idRole del ExtendedUser
    $role = Role::where('idRole', $extendedUser->idRole)->first();


    if (!$role) {
      return response()->json(['error' => "No se ha encontrado el rol del usuario {$idExtendedUser}"], 404);
    }

    return response()->json(['success' => true, 'data' => $role["role"]]);
  }
}
