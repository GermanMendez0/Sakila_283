{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba</title>
</head>
<body>
    <!--Contenedor-->
    <div class="">
        <!--Panel-->
        <div class="card">
            <!--Encabezado del panel-->
            <div class="card-header">
                <h3>CATEGORIAS</h3>
            </div>
            <!--Las categorias-->
            <div class="card-body">

                <ul class="list-group list-group-flush">
                @foreach ($categorias as $c)
                    <li class="list-group-item">{{ $c->name }}</li>
                @endforeach
                </ul>
            </div>

        </div>
    </div>
    
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha256-0XAFLBbK7DgQ8t7mRWU5BF2OMm9tjtfH945Z7TTeNIo=" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sakila - Lista de Categorias</title>
</head>
<body>
    <h1>Lista de categorías</h1>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th colspan="2">
                    Nombre de Categoría
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $c)  
                <tr>
                    <td>
                        {{ $c->name   }}
                    </td>
                    <th>
                        <a href="{{url('categorias/edit/'.$c->category_id )}}">Actualizar</a>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- paginador   -->
    {{ $categorias->links() }}
</body>
</html>




