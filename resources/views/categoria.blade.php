@extends("layout")
    @section("conteudo")
    <div class="column is-2">

               
             
                    @if(isset($listaCategoria)&& count($listaCategoria) > 0)

                        <div class="list-group">
                            <div class="column">
                            
                               <a href="{{route('categoria')}}" class="panel-block list-group-item">Todas</a>
                                @foreach($listaCategoria as $cat)<br>
                                    <a href="{{ route('categoria_por_id',['idcategoria' => $cat->id])}}" class="panel-block list-group-item">{{$cat->categoria}}</a>
                                @endforeach
                            </div>
                        </div>
                    @endif
               
       </div>

       <div class="columns">
       
      
            
                @include("_produtos",['lista'=>$lista])
                        
       
        </div>
    @endsection
