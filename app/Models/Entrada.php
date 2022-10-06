<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;

    /* 
    Esta función hace que en vez de tomar la referencia del id lo haga con el campo slug
    y así se forman las URL amigables
    */
    public function getRouteKeyName()
    {
        
        return 'slug';
        
    }

    public static function getEntradasPorCategoria($id)
    {
        return Entrada::where('categoria_id', '=', $id)
        ->join('categorias', 'entradas.categoria_id', '=', 'categorias.id')
        ->join('usuarios', 'entradas.usuario_id', '=', 'usuarios.id')
        ->get(['entradas.*', 'categorias.nombre AS nombre_cat', 'categorias.slug AS slug_cat', 'usuarios.nombre AS nombre_us']);
    }

    
}
