<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Constants\ResponseMessages;
use App\Models\HasCategory;
use Illuminate\Support\Facades\DB;

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

      if (!$user) {
        return response()->json([
          ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_AUTHENTICATION,
        ], 401);
      }

      $posts = Post::where('idExtendedUser', $user->id)
        ->with('categories:idCategory')
        ->orderBy('created_at', 'desc')
        ->get();

      if (!$posts) {
        return response()->json([
          ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_NOT_FOUND . $this->resource,
        ], 404);
      }

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
    try {
      $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'message' => 'required|string',
        'score' => 'required|integer',
        'idExtendedUser' => 'required|integer|exists:extended_user,idExtendedUser',
        'category' => 'nullable|array',
      ]);

      $post = Post::create($validatedData);

      if (!$post) {
        return response()->json([
          ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_NOT_FOUND . $this->resource,
        ], 404);
      }

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
  public function get($id)
  {
    try {
      $post = Post::find($id);

      if (!$post) {
        return response()->json([
          ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_NOT_FOUND . $this->resource,
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
    DB::beginTransaction();
    try {
      $this->updatePost($request, $id);
      $this->deleteCategories($id);
      $this->storeCategories($request, $id);
      DB::commit();
      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::SUCCESS_UPDATED . ' post + categories',
        ResponseMessages::RESPONSE_DATA => $request,
      ], 200);
    } catch (\Exception $e) {
      DB::rollBack();
      Log::error($e);
      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_UPDATING . $this->resource,
        ResponseMessages::RESPONSE_ERROR => $e->getMessage(),
      ], 500);
    }
  }

  /**
   * Actualiza un post específico.
   */
  private function updatePost(Request $request, $id)
  {
    $post = Post::find($id);

    if (!$post) {
      return response()->json([
        ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_NOT_FOUND . $this->resource,
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
  }

  /**
   * Elimina todas las categorías de un post específico.
   */
  private function deleteCategories($id)
  {
    HasCategory::where('idPost', $id)->delete();
  }

  /**
   * Almacena las categorías de un post específico.
   */
  public function storeCategories(Request $request, $idPost)
  {
    $validatedData = $request->validate([
      'title' => 'required|string|max:255',
      'message' => 'required|string',
      'score' => 'required|integer',
      'idExtendedUser' => 'required|integer|exists:extended_user,idExtendedUser',
      'category' => 'nullable|array',
    ]);

    foreach ($validatedData['category'] as $category) {
      $idCategory = $category['idCategory'];
      Log::debug("Category ID: " . $idCategory);
      HasCategory::create([
        'idCategory' => $idCategory,
        'idPost' => $idPost,
        'created_at' => now(),
        'updated_at' => now(),
      ]);
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
          ResponseMessages::RESPONSE_MESSAGE => ResponseMessages::ERROR_NOT_FOUND . $this->resource,
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
