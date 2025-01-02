<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtendedUser extends Model
{
  use HasFactory;

  // Especifica el nombre de la tabla, si es necesario
  protected $table = 'extended_user';

  // Especifica los campos que pueden ser asignados masivamente
  protected $fillable = [
    'idExtendedUser',
    'birthDate',
    'idCivilStatus',
    'idGenre',
    'idRole',
    'idEmployment',
  ];

  // Si no se usan los campos de timestamps (created_at y updated_at), se puede desactivar
  public $timestamps = true;

  public function role()
  {
      return $this->belongsTo(Role::class, 'idRole', 'idRole');  // 'idRole' es la clave foránea en extended_user
  }
}
