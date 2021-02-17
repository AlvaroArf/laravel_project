<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
	use HasFactory;

	public $table = "departamentos";

    
    protected $fillable = [
        'nombre_depto', 'descripcion'
    ];
    public function empleados() {
        return $this->hasMany(Empleado::class);
    }
}
