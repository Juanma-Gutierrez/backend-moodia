<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
  /**
   * Muestra una lista de todos los posts.
   */
  public function index()
  {
    $posts = Post::all();
    return response()->json($posts);
  }

  /**
   * Almacena un nuevo post.
   */
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'title' => 'required|string|max:255',
      'message' => 'required|string',
      'creationDate' => 'required|date',
      'score' => 'required|integer',
      'idExtendedUser' => 'required|integer|exists:extended_user,idExtendedUser',
    ]);
    $post = Post::create($validatedData);
    return response()->json($post, 201);
  }

  /**
   * Muestra un post específico.
   */
  public function show($id)
  {
    $post = Post::find($id);
    if (!$post) {
      return response()->json(['message' => 'Post no encontrado'], 404);
    }
    return response()->json($post);
  }

  /**
   * Actualiza un post específico.
   */
  public function update(Request $request, $id)
  {
    $post = Post::find($id);
    if (!$post) {
      return response()->json(['message' => 'Post no encontrado'], 404);
    }
    $validatedData = $request->validate([
      'title' => 'sometimes|required|string|max:255',
      'message' => 'sometimes|required|string',
      'creationDate' => 'sometimes|required|date',
      'score' => 'sometimes|required|integer',
      'idExtendedUser' => 'sometimes|required|integer|exists:extended_user,idExtendedUser',
    ]);
    $post->update($validatedData);
    return response()->json($post);
  }

  /**
   * Elimina un post específico.
   */
  public function destroy($id)
  {
    $post = Post::find($id);
    if (!$post) {
      return response()->json(['message' => 'Post no encontrado'], 404);
    }
    $post->delete();
    return response()->json(['message' => 'Post eliminado correctamente']);
  }
}
