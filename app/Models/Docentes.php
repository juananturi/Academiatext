<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docentes extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellidos', 'tituloUniversitario', 'edad', 'fecha_contrato', 'fotoPerfil', 'doc_identidad'];
    use HasFactory;

    public function materias(){
        return $this->belongsTo(Materias::class);
    }
    
}
