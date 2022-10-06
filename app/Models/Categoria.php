<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        
        return 'slug';
    }

    public static function getCategorias()
    {
        return Categoria::select('categorias.*', Entrada::raw('count(entradas.id) as cantidad'))
            ->leftJoin('entradas', 'entradas.categoria_id', '=', 'categorias.id')
            ->groupBy('categorias.id')
            ->get();
    }
}

