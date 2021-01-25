<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>LojaVirtual</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.1/css/bulma.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
 </head>

 <body>
    <nav class="navbar navbar is-light pt-4 pr-5 pl-6  mr-0">
        <a href="#" class="navbar-brand">LojaVirtual</a>
        <div class="nav-menu ">
            <div class="navbar-nav">
                <a class="nav-item ml-5" href="{{ route('home') }}">Home</a>
                <a class="nav-item ml-5" href="{{ route('categoria') }}">Categorias</a>
                <a class="nav-item ml-5" href="{{ route('cadastrar') }}">Cadastrar</a>
             </div>
        </div>
            <div class="navbar-end">
                <a href="#" class="button button is-light"><i class="fa fa-shopping-cart"></i></a>
             </div>
     </nav>

     <div class="container">

        <div class="columns">
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
                                    
            </div>
    </div>
        
        
           
        
  </div>

 </body>


</html>
