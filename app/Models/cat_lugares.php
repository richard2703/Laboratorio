<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cat_lugares extends Model
{
    use HasFactory;

    protected $table = "cat_lugares";

    public $timestamps = false;

    protected $fillable = [
        'nombre'
    ];
}
