<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Entrada;
use App\Models\Categoria;
use App\Models\Tags;

class CategoriaController extends Controller
{
    
    public function showPorCategoria(Categoria $id)
    {
        $datos['sec_categorias'] = Categoria::getCategorias();
        $datos['sec_tags'] = Tags::All();
        $datos['sec_ult_entradas'] = Entrada::take(6)->orderBy('created_at', 'desc')->get();
        $datos['entradas'] = Entrada::getEntradasPorCategoria($id->id);
        
        
        $datos['mismas'] = false; 
        return view('content.categoria', $datos);
        
    }
}
