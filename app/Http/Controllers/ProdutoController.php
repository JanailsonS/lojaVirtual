<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Models\Categoria;
use Illuminate\Models\Produto;

class ProdutoController extends Controller
{
    public function index(Request $request){
        $data = [];


        //Aqui  fica a busca por todos os produtos
        //Seleciona os produtos
        $listaProdutos = \App\Models\Produto::all();
        $data["lista"] = $listaProdutos;

        return view("home", $data);

        
    }

    public function categoria(Request $request){
        $data = [];
        //Seleciona as categoria
        $listaCategorias = Categoria::all();

        //Seleciona os produtos com limite de 4 
        $listaProdutos = Produto::limit(4)->get();

        $data["lista"] = $listaProdutos;
        $data["listaCategoria"] = $listaCategorias;

        return view("categoria", $data);
    }
}
