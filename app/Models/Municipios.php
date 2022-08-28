<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    protected $filleable = ['id','nombre', 'id_departamento'];
    use HasFactory;

    public function estudiantes(){
        return $this->hasMany(Estudiantes::class);
    }
}
