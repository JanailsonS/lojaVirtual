@extends("layout")
    @section("conteudo")
        <h3>Carrinho</h3>

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
            @foreach($cart as $p)
                <tr>
					<td>
						<a href="#" class="btn btn-danger btn-sm">
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
        <p>Nenhum item adicionado ao carrinho</p>
        @endif

    @endsection
