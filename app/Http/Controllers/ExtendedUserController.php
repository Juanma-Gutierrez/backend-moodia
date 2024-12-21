<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExtendedUser;
use Illuminate\Support\Facades\Auth;

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
      'birthDate' => 'nullable|date',
      'idCivilStatus' => 'nullable|integer',
      'idGenre' => 'nullable|integer',
      'idRole' => 'nullable|integer',
      'idEmployment' => 'nullable|integer',
    ]);

    // Encuentra el registro de ExtendedUser del usuario autenticado
    $extendedUser = ExtendedUser::where('id', $user->id)->first();

    if (!$extendedUser) {
      return response()->json(['error' => 'No se encontró la información extendida del usuario'], 404);
    }

    // Actualiza los campos
    $extendedUser->update(array_filter($validated));

    return response()->json(['success' => true, 'data' => $extendedUser]);
  }

  // Obtener la información extendida de un usuario
  public function show($id)
  {
    // Encuentra el registro de ExtendedUser por ID
    $extendedUser = ExtendedUser::where('id', $id)->first();

    if (!$extendedUser) {
      return response()->json(['error' => 'No se encontró la información extendida del usuario'], 404);
    }

    return response()->json(['success' => true, 'data' => $extendedUser]);
  }
}
