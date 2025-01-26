<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Constants\ResponseMessages;
use App\Models\HasCategory;

class PostController extends Controller
{
  protected $resource = 'post';

  /**
   * Muestra una lista de todos los posts.
   */
  public function list()
  {
    try {
      $user = Auth::user();
      Log::debug("ENTRA***");
      if (!$user) {
        Log::debug("NO HAY USUARIO ***");
        return response()->json([
          ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_AUTHENTICATION,
        ], 401);
      }
      Log::debug("DEVUELVE POSTS ***");

      $posts = Post::where('idExtendedUser', $user->id)
        ->with('categories:idCategory')
        ->orderBy('created_at', 'desc')
        ->get();

      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::SUCCESS_FETCHED . $this->resource,
        ResponseMessages::RESPONSE_DATA => $posts,
      ], 200);
    } catch (\Exception $e) {
      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_FETCHING . $this->resource,
        ResponseMessages::RESPONSE_ERROR => $e->getMessage(),
      ], 500);
    }
  }

  /**
   * Almacena un nuevo post.
   */
  public function store(Request $request)
  {
    Log::debug($request);
    try {
      $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'message' => 'required|string',
        'score' => 'required|integer',
        'idExtendedUser' => 'required|integer|exists:extended_user,idExtendedUser',
        'category' => 'nullable|array',
      ]);

      $post = Post::create($validatedData);

      foreach ($validatedData['category'] as $categoryId) {
        HasCategory::create([
          'idCategory' => $categoryId,
          'idPost' => $post->idPost,
          'created_at' => now(),
          'updated_at' => now(),
        ]);
      }

      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::SUCCESS_CREATED . $this->resource,
        ResponseMessages::RESPONSE_DATA => $post,
      ], 201);
    } catch (\Exception $e) {
      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_CREATING . $this->resource,
        ResponseMessages::RESPONSE_ERROR => $e->getMessage(),
      ], 500);
    }
  }

  /**
   * Muestra un post específico.
   */
  public function show($id)
  {
    try {
      $post = Post::find($id);
      if (!$post) {
        return response()->json([
          ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::POST_NOT_FOUND,
        ], 404);
      }

      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::SUCCESS_FETCHED . $this->resource,
        ResponseMessages::RESPONSE_DATA => $post,
      ], 200);
    } catch (\Exception $e) {
      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_FETCHING . $this->resource,
        ResponseMessages::RESPONSE_ERROR => $e->getMessage(),
      ], 500);
    }
  }

  /**
   * Actualiza un post específico.
   */
  public function update(Request $request, $id)
  {
    try {
      $post = Post::find($id);
      if (!$post) {
        return response()->json([
          ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::POST_NOT_FOUND,
        ], 404);
      }

      $validatedData = $request->validate([
        'title' => 'sometimes|required|string|max:255',
        'message' => 'sometimes|required|string',
        'score' => 'sometimes|required|integer',
        'idExtendedUser' => 'sometimes|required|integer|exists:extended_user,idExtendedUser',
      ]);

      $post->update($validatedData);

      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::SUCCESS_UPDATED . $this->resource,
        ResponseMessages::RESPONSE_DATA => $post,
      ], 200);
    } catch (\Exception $e) {
      Log::error($e);
      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_UPDATING . $this->resource,
        ResponseMessages::RESPONSE_ERROR => $e->getMessage(),
      ], 500);
    }
  }

  /**
   * Elimina un post específico.
   */
  public function destroy($id)
  {
    try {
      $post = Post::find($id);
      if (!$post) {
        return response()->json([
          ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::POST_NOT_FOUND,
        ], 404);
      }

      $post->delete();

      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::SUCCESS_DELETED . $this->resource,
      ], 200);
    } catch (\Exception $e) {
      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_DELETING . $this->resource,
        ResponseMessages::RESPONSE_ERROR => $e->getMessage(),
      ], 500);
    }
  }
}
