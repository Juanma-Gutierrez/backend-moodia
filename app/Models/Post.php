<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $table = 'post';
  protected $primaryKey = 'idPost';
  public $incrementing = true;
  protected $keyType = 'int';
  public $timestamps = true;
  protected $fillable = [
    'title',
    'message',
    'creationDate',
    'score',
    'idExtendedUser',
  ];

  protected $hidden = [];
  public function extendedUser()
  {
    return $this->belongsTo(ExtendedUser::class, 'idExtendedUser', 'id');
  }
  public function categories()
  {
    return $this->belongsToMany(Category::class, 'has', 'idPost', 'idCategory');
  }
}
