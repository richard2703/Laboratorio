<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lugares extends Model
{
    use HasFactory;

    protected $table = "lugares";

    public $timestamps = false;

    protected $fillable = [
        'nombre', 'cat_lugares_id', 'direccion', 'telefono', 'correo', 'encargado', 'telEncargado', 'foraneo'
    ];
}
