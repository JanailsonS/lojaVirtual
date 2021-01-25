<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $cat = new \App\Models\Categoria(['categoria' => 'Geral']);
        $cat->save();

        $prod = new \App\Models\Produto(['nome' => 'produto 1', 'valor' =>10, 'foto' =>'http://localhost/imagens/produto3.jpg', 'descricao'=>'', 'categoria_id'=>$cat->id]);
        $prod->save();

        $prod2 = new \App\Models\Produto(['nome' => 'produto 2', 'valor' =>10, 'foto' =>'http://localhost/imagens/produto3.jpg', 'descricao'=>'', 'categoria_id'=>$cat->id]);
        $prod2->save();

        $prod3 = new \App\Models\Produto(['nome' => 'produto 3', 'valor' =>10, 'foto' =>'http://localhost/imagens/produto3.jpg', 'descricao'=>'', 'categoria_id'=>$cat->id]);
        $prod3->save();

        $prod4 = new \App\Models\Produto(['nome' => 'produto 4', 'valor' =>10, 'foto' =>'http://localhost/imagens/produto3.jpg', 'descricao'=>'', 'categoria_id'=>$cat->id]);
        $prod4->save();

        $prod5 = new \App\Models\Produto(['nome' => 'produto 5', 'valor' =>10, 'foto' =>'http://localhost/imagens/produto3.jpg', 'descricao'=>'', 'categoria_id'=>$cat->id]);
        $prod5->save();

        $prod6 = new \App\Models\Produto(['nome' => 'produto 6', 'valor' =>10, 'foto' =>'http://localhost/imagens/produto3.jpg', 'descricao'=>'', 'categoria_id'=>$cat->id]);
        $prod6->save();

        $prod7 = new \App\Models\Produto(['nome' => 'produto 7', 'valor' =>10, 'foto' =>'http://localhost/imagens/produto3.jpg', 'descricao'=>'', 'categoria_id'=>$cat->id]);
        $prod7->save();

        $prod8 = new \App\Models\Produto(['nome' => 'produto 8', 'valor' =>10, 'foto' =>'http://localhost/imagens/produto3.jpg', 'descricao'=>'', 'categoria_id'=>$cat->id]);
        $prod8->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
