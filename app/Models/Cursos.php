<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;
    protected $filleable = ['nombre','descripcion', 'duracion', 'imagen'];

    //relaciones 
    public function materias(){
        return $this->hasMany(Materias::class);
    }

    public function estudiantes(){
        return $this->hasMany(Estudiantes::class);
    }
}
