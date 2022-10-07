<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;
use App\Models\Entrada;

class CategoriaController extends Controller
{

    protected $categorias;

    
    public function show( Categoria $id)
    {
        
        $datos = array();
        $datos['categoria'] = Categoria::find($id);
        //$datos['categorias'] = Categoria::get();

        $datos['categorias']  = Categoria::select('categorias.*', Entrada::raw('count(entradas.id) as cantidad'))
    ->leftJoin('entradas', 'entradas.categoria_id', '=', 'categorias.id')
    ->groupBy('categorias.id')
    ->get(); 

    



        $datos['entradas_tot'] = Entrada::take(2)->orderBy('created_at', 'desc')->get();   
  
        $datos['entradas'] = getEntradasPorCategoria($id);

        

        return view('categoria', $datos);
    }
}
