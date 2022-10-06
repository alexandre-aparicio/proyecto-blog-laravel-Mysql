<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Entrada;
use App\Models\Categoria;
use App\Models\Tags;



class EntradaController extends Controller
{


    public function index()
    {
        $datos = array();
        $datos['entradas'] = Entrada::get();
        $datos['sec_categorias'] = Categoria::getCategorias();
        $datos['sec_tags'] = Tags::All();
        $datos['sec_ult_entradas'] = Entrada::take(6)->orderBy('created_at', 'desc')->get();          
        $datos['mismas'] = false; 
        return view('welcome', $datos);
    }

    public function show( Entrada $id)
    {
        $datos['entrada'] = Entrada::find($id->id);
        $datos['sec_ult_entradas'] = Entrada::take(6)->orderBy('created_at', 'desc')->get();         
        $datos['sec_categorias'] = Categoria::getCategorias();
        $datos['sec_tags'] = Tags::All();
        $datos['mismas'] = true; 

        $datos['sec_entradas_categoria'] = Entrada::getEntradasPorCategoria($datos['entrada']->categoria_id);      
        
        return view('entrada', $datos);
    }

    public function showPorCategoria(Categoria $id)
    {
        $datos['sec_categorias'] = Categoria::getCategorias();
        $datos['sec_tags'] = Tags::All();
        $datos['sec_ult_entradas'] = Entrada::take(6)->orderBy('created_at', 'desc')->get();
        $datos['entradas'] = Entrada::getEntradasPorCategoria($id->id);
        
        
        $datos['mismas'] = false; 
        return view('categoria', $datos);
        
    }
}
