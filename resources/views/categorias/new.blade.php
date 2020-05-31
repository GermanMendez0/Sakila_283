<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Añadir Categoría</title>
</head>
<body>
        <form method="POST" action="{{ url('categorias/store') }}" class="form-horizontal">
        @csrf
        <fieldset>
        <!-- detectar si la variable "exito" tiene un valor -->
         @if(session("exito"))   
            <div class="alert-success">{{  session("exito")    }}</div>
        @endif 
        <!-- Form Name -->
        <legend>Nueva Categoría</legend>
​
        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Nombre Categoría:</label>  
        <div class="col-md-4">
        <input id="textinput" name="categoria" type="text" value="{{old('categoria')}}" placeholder="" class="form-control input-md">
          <strong class="text-danger"> {{  $errors->first('categoria')  }} </strong>
        </div>
        </div>
​
        <!-- Button -->
        <div class="form-group">
        <label class="col-md-4 control-label" for=""></label>
        <div class="col-md-4">
            <button id="" name="" class="btn btn-primary">Enviar</button>
        </div>
        </div>
​
        </fieldset>
        </form>
</body>
</html>