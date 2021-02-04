@extends("layout")
    @section("conteudo")

    <h2>Categorias</h2>

        @if(isset($listaCategoria)&& count($listaCategoria) > 0)

            <table class="table">
                <ul>
                    <li><a href="{{route('categoria')}}">Todas</a></li>
                    @foreach($listaCategoria as $cat)
                        <li><a href="{{ route('categoria_por_id',['idcategoria' => $cat->id])}}">{{$cat->categoria}}</a></li>
                    @endforeach
                </ul>
            </table>
        @endif

        @include("_produtos",['lista'=>$lista])
       
    @endsection
