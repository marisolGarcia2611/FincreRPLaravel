<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vistas extends Model
{
    use HasFactory;

    public $table = "tblvistas";
  
    protected $fillable = [
        'id',
        'nombre_vista',
        'descripcion_vista',
        'estado_vista',
    ];
}
