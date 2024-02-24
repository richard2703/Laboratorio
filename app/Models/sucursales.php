<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sucursales extends Model
{
    use HasFactory;

    protected $table = "sucursales";

    public $timestamps = false;

    protected $fillable = [
        'nombre', 'direccion', 'telefono', 'correo', 'encargado', 'telEncargado', 'foraneo'
    ];
}
