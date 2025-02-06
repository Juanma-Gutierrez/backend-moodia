<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{

  protected $table = 'challenge';
  protected $primaryKey = 'idChallenge';
  public $timestamps = true;

  protected $fillable = [
    'title',
    'message',
    'idCategory',
  ];

  public function category()
  {
    return $this->belongsTo(Category::class, 'idCategory', 'idCategory');
  }
}
