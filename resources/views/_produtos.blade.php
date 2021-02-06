@if(isset($lista))
        <div class="row">
            <div class="columns">
                @foreach($lista as $prod)
                        <div class="column">

                            <div class="card">
                                
                                <figure class="image is-300x300">
                                    <img src="{{asset($prod->foto)}}" class="card-img-top"/>
                                </figure>
                                
                                <div class="card-content">
                                    <h6 class="card-title">{{ $prod->nome }} - R${{ $prod->valor }}</h6>
                                    <a href="{{ route('adicionar_carrinho',['idproduto' => $prod->id])}}" class="button is-small is-fullwidth is-primary">Adicionar</a>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
 @endif
