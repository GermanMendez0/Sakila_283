<?php

// use App\Categoria;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route:: get('/', function() {
}); 
// 
// Controlador y accion se separan por arroba
// Ruta de controladorDB
Route::get ("categorias" , "CategoriaController@index" );
// Ruta de mostrar formulario
Route::get("categorias/create" , "CategoriaController@create" ); 
// Ruta para guardar la nueva categoria  en BD
Route::post('categorias/store' , "CategoriaController@store");
//  ruta para mostrar el formulario para actualizar (cambiar nombre) categoria 
Route::get("categorias/edit/{idcategoria}" , "CategoriaController@edit" );
// Ruta para guardar cambios de categoria 
Route::post('categorias/update' , "CategoriaController@update");













// Route::get('/', function () {
    // return view('welcome');
// });


// Ruta de prueba
// Route::get('prueba' , function () {
    
    // definir un arreglo

    // $estudiante = [
            // "Ana",
            // "Jorge",
            // "Maria"

    // ];

    // echo "<pre>";
    // var_dump($estudiante);
    // echo"</pre>";

// });

// Route::get('paises', function () {

    // $paises =["Colombia" => [
                            // "capital" => "Bogota",
                            // "moneda" => "Peso",
                            // "poblacion" => 55,
                            // "ciudades" => [
                                            // "Cali", "Medellin", "Barranquilla"
                                        //   ]
                            // ],

            //   "Ecuador" => [
                            // "capital" => "Quito",
                            // "moneda" => "Dolar",
                            // "poblacion" => 19,
                            // "ciudades" => [
                                            // "Mata", "Pichincha"
                                        //   ]
                            // ],

            //   "Brazil" => [
                            // "capital" => "Brasilia",
                            // "moneda" => "Real",
                            // "poblacion" => 200,
                            // "ciudades" => [
                                    // "Santos", "sao paulo", "Bahia"
                                            //  ]
                            // ]

                        // ];
    
// pasar el arreglo de paises a una vista 
// return view("paises")->with("paises", $paises);

// });














