<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paises extends Model
{
    protected $filleable = ['id', 'nombre'];
    use HasFactory;

    //relacion uno a muchos 
    public function departamentos(){
        return $this->hasMany(Departamentos::class);
    }
}
