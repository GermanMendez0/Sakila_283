<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.css">
    <title>Paises</title>
</head>
<body>
    <h1 class="text-danger">Lista de paises</h1>
    <table class="table table-hover">
        <thead  class="table-dark">
            <tr>
                <th>Pais</th>
                <th>Capital</th>
                <th>Moneda</th>
                <th>Poblacion</th>
                <th>Ciudades</th>
                 
                
            </tr>
        </thead>
        <tbody>
            @foreach ($paises as $pais=>$infopais)
            
            <ul>
                <tr>
                    <td rowspan="5" colspan="1">
                            <p>{{ $pais }}</p>
                            
                    </td>
                </tr>
                <tr>
                    <td rowspan="4" colspan="1">
                        <p>{{ $infopais["capital"]  }}</p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="3" colspan="1">
                        <p>{{ $infopais["moneda"]  }}</p>
                    </td>
                </tr>
                <tr>     
                    <td rowspan="2" colspan="1">
                    
                        <ul>
                     <p>  {{ $infopais["poblacion"]  }} </p>
                        </ul>
                        
                    </td>
                </tr>
                <tr>
                    <td rowspan="1" colspan="1">
                        <ul>
                        @foreach ($infopais["ciudades"] as $ciudad)
                            
                               <p> <li>{{$ciudad}}</li></p>

                        @endforeach 
                        </ul>
                    </td>
                </tr>
            </ul>   
            @endforeach
        </tbody>

    </table>


</body>
</html>