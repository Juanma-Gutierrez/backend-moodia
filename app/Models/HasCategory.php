<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HasCategory extends Model
{
  protected $table = 'has';

  public $incrementing = false;
  protected $primaryKey = null;

  protected $fillable = [
    'idCategory',
    'idPost',
    'created_at',
    'updated_at',
  ];

  public $timestamps = false;
}
