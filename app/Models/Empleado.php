<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
	use HasFactory;

	public $table = "empleados";

	protected $fillable = [
		'nombre', 'apellido', 'dni', 'nombre_depto'
	];

    public function departamentos() {
        return $this->belongsTo(Departamento::class);
    }
}
