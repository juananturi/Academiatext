<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
    use HasFactory;
    protected $filleable = ['id','nombre','intencidad_horaria'];

    public function cursos(){
        return $this->belongsTo(Cursos::class);
    }

    public function docente(){
        return $this->hasMany(Docentes::class);
    }
}
