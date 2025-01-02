<?php

// app/Models/Role.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  use HasFactory;

  // Especifica el nombre de la tabla, si es necesario
  protected $table = 'role';

  // Define la clave primaria (si no es 'id')
  protected $primaryKey = 'idRole';

  // Define los campos que pueden ser asignados masivamente
  protected $fillable = ['idRole', 'role'];

  // Si no usas timestamps, puedes desactivarlos
  public $timestamps = true;
}
