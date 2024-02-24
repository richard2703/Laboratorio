<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctores extends Model
{
    use HasFactory;

    protected $table = "doctores";

    public $timestamps = false;

    protected $fillable = [
        'nombre', 'direccion', 'telefono', 'correo', 'encargado', 'telEncargado', 'foraneo'
    ];
}
