<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
	use HasFactory;
	protected $fillable = [
		'nom_depto'
	];

	public function empleado()
	{
		return $this->hasMany(Empleado::class);
	}
}
