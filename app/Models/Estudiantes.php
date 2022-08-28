<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'id_estudiante', 'numero_documento', 'documento_identidad', 'expedition_date', 'departamento_expedicio', 'nombre', 'primer_apellido', 'segundo_apellido', 'genero', 'fecha_nacimiento', 'estrato',];

    public function municipioNacimiento(){
        return $this->belongsTo(Municipios::class);
    }

    public function cursos(){
        return $this->belongsTo(Cursos::class);
    }
}
