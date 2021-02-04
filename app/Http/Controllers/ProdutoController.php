<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index(Request $request){
        $data = [];


        //Aqui  fica a busca por todos os produtos
        //Seleciona os produtos
        $listaProdutos = Produto::all();
        $data["lista"] = $listaProdutos;

        return view("home", $data);

        
    }

    public function categoria(Request $request, $idcategoria=0){
        $data = [];

        //Seleciona as categoria
        $listaCategorias = Categoria::all();

        //Seleciona os produtos com limite de 4 
        $queryProduto = Produto::limit(4);

        if($idcategoria !=0){
            // WHERE categoria_id = $idcategoria
            $queryProduto->where("categoria_id",$idcategoria);
        }

        $listaProdutos = $queryProduto->get();

        $data["lista"] = $listaProdutos;
        $data["listaCategoria"] = $listaCategorias;
        return view("categoria", $data);
    }
}
