<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriaController extends Controller
{
    //Los controllers se componen de acciones 
    // acciones= metodos que tienen instrucciones 
    // pueden tener el nombre deseado,pero tratar de que no sean mayusculas
    public function index(){
        // Dentro de los controladores
        // Van las acciones van las intrucciones a ejecutar
         // Seleccionar datos atraves del modelo
        $categorias = Categoria::paginate(5); 
        // invocar vista e ingresar a la vista el listado de categorias
        return view("categorias.index")->with("categorias" , $categorias);
        //  echo"lista de categorias";

       
    }
    public function create(){
        // echo "formulario de Categorias
        return view ("categorias.new");
    }

    

    //  Acction store: guardar la categoria que viene desde formulario
    public function store(){

        $reglas = [
            "categoria" => ["required" , "alpha" , "min:4", "unique:category,name"]
        ];

        // mensajes en español
        $mensajes = [
            "required" => "Campo obligatorio",
            "alpha" => "Solo letras",
            "min" => "Solo categorias de :min caracteres",
            "unique" => "Categoria repetida"
        ];

        // apliacar la validacion
        // creando un objeto vali
        $validador = Validator::make($_POST, $reglas, $mensajes );

        // con los datos a validar y las reglas
        // hacer compraracion de reglas
        if($validador->fails()){
                // validacion falla 
                // redirigir al formulario con los mensajes de error  
                // y tambien con los datos traidos del formulario
                return redirect("categorias/create")->withErrors($validador)->withInput();

        }else{
                // la validacion no falla?
                // ejecucion de flujo normal
                 // crea una categoria
            $categoria = new Categoria;
            // 
            $categoria->name = $_POST["categoria"];
            // $_POST: es un arreglo(unidimencional) incorporado en PHP
            // donde quedan almacenados  los datos de un formlario
            $categoria->save();
            // letrero de texto
            // echo "categoria guardada";
            // letrero de texto: por medici de un redireccionamiento
            // redireccionamos a rutas que tengamos en el web.php
            return redirect('categorias/create')->with("exito"  , "Categoria registrada")->withInput();
        }

    }

    // mostrar el formulario de actualizar
    public function edit($idcategoria){
        
        // echo $idcategoria;
        // seleccionar la categoria que tenga ese id
        $categoria = Categoria::find($idcategoria);
    //    llevar los datos de la categoria 
        return view('categorias.edit')->with("categoria" , $categoria);
        }


        
    // Guarda la categoria actualizada
    public function update( ){


        $reglas = [
            "categoria" => ["required" , "alpha" , "min:4", "unique:category,name"]
        ];

        // mensajes en español
        $mensajes = [
            "required" => "Campo obligatorio",
            "alpha" => "Solo letras",
            "min" => "Solo categorias de :min caracteres",
            "unique" => "Categoria repetida"
        ];

        // apliacar la validacion
        // creando un objeto vali
        $validador = Validator::make($_POST, $reglas, $mensajes );
       
        // con los datos a validar y las reglas
        // hacer compraracion de reglas
        if($validador->fails()){
                // validacion falla 
                // redirigir al formulario con los mensajes de error  
                // y tambien con los datos traidos del formulario
                return redirect("categorias/edit/".$_POST["id"])->withErrors($validador)->withInput();

        }else{
                // la validacion no falla?
                // ejecucion de flujo normal
                 // crea una categoria
            $categoria = Categoria::find($_POST["id"]);

           
            // 
            $categoria->name = $_POST["categoria"];
           
            // $_POST: es un arreglo(unidimencional) incorporado en PHP
            // donde quedan almacenados  los datos de un formlario
            $categoria->save();
            // letrero de texto
            // echo "categoria guardada";
            // letrero de texto: por medici de un redireccionamiento
            // redireccionamos a rutas que tengamos en el web.php
            return redirect('categorias/edit/'.$_POST["id"])->with("exito"  , "Categoria editada");
             //   seleccionar categoria a editar
            // echo "Los cambios fueron guardados correctamente";
        // // actualizamos atributos
        // $categoria->name =$_POST["categoria"];
        // // guardar cambios
        // $categoria->save();
        
        }


       
    
    }

    }
    


    







    
 