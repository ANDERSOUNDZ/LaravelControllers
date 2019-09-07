<?php

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

Route::get('/', function () {
    return view('welcome');
});


//ESTAS SON RUTAS QUE LLAMARAN A LOS CONTROLADORES QUE ESTAN EN LA CARPETA Http/Controllers

//INICIO - Conectar una ruta a un controlador
//Ruta para listar

Route::get('/categories','CategoriesController@primeraFuncion' )
//Nombrando la ruta
->name('categories.inicio')
;

//FIN - Conectar una ruta a un controlador

//INICIO -   Creacion de una Categopria , funcion y llamado desde el controlador
//Ruta para mostrar el formulario para crear

Route::get('/categories/crear','CategoriesController@crearCategoria')
//Nombrando ruta
->name('categories.crear')
;
//FIN -   Creacion de una Categopria , funcion y llamado desde el controlador

//Inicio peticiones http: POST
//INICIO - Ruta para procesar los datos que envia
//Ruta para  procesar el formulario

Route::post('/categories','CategoriesController@almacenar')
//Nombrando ruta
->name('categories.almacenar')
;

//FIN - Ruta para procesar los datos que envia 
//Fin peticiones http: POST

//INICIO - Inicio peticiones Http : Metodo update
//Ruta para actualizar los datos procesados
//Al comenzar a utilizar variables , podemos pedirle que muestre cierto tipo de categoria, algo asi como si tengo informacion en una tabla, quie r que me muestre solo la categoria Electrodomesticos o otra 
Route::get('categories/{category}','CategoriesController@mostrarCategoria')
//Nombrando ruta
->name('categories.mostrarcategoria')
;

//FIN - Inicio peticiones Http : Metodo update

// INICIO - Ruta para mostrar el formulario edit 
Route::get('/categories/{category}/edit','CategoriesController@metodoEditar')
//Nombrando ruta
->name('categories.editarcategoria')
;
// FIN - Ruta para mostrar el formulario edit


// INICIO - Ruta para procesar y editar una categoria 
//El verbo PUT se utiliza para actualizaciones
Route::put('/categories/{category} ','CategoriesController@metodoActualizar')
//Nombrando ruta
->name('categories.editarcategoria')
;
// FIN - Ruta para procesar el formulario edit


//INICIO - Ruta para eliminar una categoria 

Route::delete('categories/{category}','CategoriesController@metodoEliminar')
//Nombrando la ruta
->name('categories.eliminarcategoria')
;

//FIN - Ruta para eliminar una categoria 