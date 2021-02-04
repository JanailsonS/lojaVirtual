@if(isset($lista))
                @foreach($lista as $prod)
                        <div class="column">
                            <div class="card">
                                <figure class="img is-300x300">
                                    <img src="{{asset($prod->foto)}}" class="card-img-top"/>
                                </figure>

                                <div class="card-content">
                                    <h6 class="card-title">{{ $prod->nome }} - R${{ $prod->valor }}</h6>
                                    <a href="#" class="button is-small is-fullwidth is-primary">Adicionar</a>
                                </div>
                            </div>
                        </div>
                @endforeach
            @endif
