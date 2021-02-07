@extends("layout")
    @section("conteudo")

    <div class="column is-2">
    <h3 class="title is-3">Carrinho</h3>
    </div>
        @if(isset($cart) && count($cart) > 0)


        <table class="table is-fullwidth">

            <thead>
                <tr>
					<th></th>
                    <th>Nome</th>
                    <th>Foto</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbory>
            @foreach($cart as $indice => $p)
                <tr>
					<td>
						<a href="{{ route('carrinho_excluir',['indice'=> $indice])}}" class="button is-danger is-light button-sm">
							<i class="fa fa-trash"></i>
						</a>
					</td>
                    <td>{{$p->nome}}</td>
					<figure class="image is-16x16">
                    <td><img src="{{asset($p->foto)}}"/></td>
					</figure>
                    <td>{{$p->valor}}</td>
                    <td>{{$p->descricao}}</td>
                </tr>
            @endforeach
            </tbody>

        </table>

        @else
        <div class="column has-text-centered">
        <p>Nenhum item adicionado ao carrinho</p>
        </div>
        @endif

    @endsection
