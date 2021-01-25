<!DOCTYPE html>
<html lang="en">
    <head>
         <meta charset="UTF-8">
	    <meta name="viewport" content="width-device-width, initial-scale=1.0">
           
          <title>LojaVirtual</title>

   </head>

   <body>
    <h3>Categorias</h3>

    @if(isset($listaCategoria)&& count($listaCategoria) > 0)

    <table class="table">
        <tr>
            @foreach($listaCategoria as $cat)
                <th>{{$cat->categoria}}
                </th>
            @endforeach
        </tr>
    </table>
  </body>

</html>
