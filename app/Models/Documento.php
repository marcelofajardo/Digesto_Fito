<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    protected $fillable = [
            'Titulo' ,
            'Descripcion' ,
            'year' ,
            'Numero' ,
            'url' ,
            'user_id' ,
            'categoria_id' ,
            'tipo_id' ,
    ];
}
