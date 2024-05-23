<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class examen_precio extends Model
{
    use HasFactory;

    protected $table = "examen_precio";

    public $timestamps = true;

    protected $fillable = [
        'tipoLugarId','examenId','precio'
    ];
}
