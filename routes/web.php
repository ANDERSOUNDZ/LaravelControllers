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


//-------------------------------INICIO - Clase Rutas con controlador Independientes--------------------------------------------

/*

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

*/

//-------------------------------FIN - Clase Rutas con controlador Independientes--------------------------------------------

//------------------------------- INICIO - Clase Rutas con controlador Agrupadas--------------------------------------------

/*

//INICIO - Crear un grupo de rutas para definir las rutas de manera optima

Route::group(['prefix' =>'categories'], function (){

//Como tengo ya el prefijo "Categories", ya no necesito mostrarlo en la ruta del navegador

//INICIO - Conectar una ruta a un controlador
//Ruta para listar

Route::get('/','CategoriesController@primeraFuncion' )
//Nombrando la ruta
->name('categories.inicio')
;

//FIN - Conectar una ruta a un controlador

//INICIO -   Creacion de una Categopria , funcion y llamado desde el controlador
//Ruta para mostrar el formulario para crear

Route::get('/crear','CategoriesController@crearCategoria')
//Nombrando ruta
->name('categories.crear')
;
//FIN -   Creacion de una Categopria , funcion y llamado desde el controlador

//Inicio peticiones http: POST
//INICIO - Ruta para procesar los datos que envia
//Ruta para  procesar el formulario

Route::post('/','CategoriesController@almacenar')
//Nombrando ruta
->name('categories.almacenar')
;

//FIN - Ruta para procesar los datos que envia 
//Fin peticiones http: POST

//INICIO - Inicio peticiones Http : Metodo update
//Ruta para actualizar los datos procesados
//Al comenzar a utilizar variables , podemos pedirle que muestre cierto tipo de categoria, algo asi como si tengo informacion en una tabla, quie r que me muestre solo la categoria Electrodomesticos o otra 
Route::get('/{category}','CategoriesController@mostrarCategoria')
//Nombrando ruta
->name('categories.mostrarcategoria')
;

//FIN - Inicio peticiones Http : Metodo update

// INICIO - Ruta para mostrar el formulario edit 
Route::get('/{category}/editar','CategoriesController@metodoEditar')
//Nombrando ruta
->name('categories.editarcategoria')
;
// FIN - Ruta para mostrar el formulario edit


// INICIO - Ruta para procesar y editar una categoria 
//El verbo PUT se utiliza para actualizaciones
Route::put('/{category} ','CategoriesController@metodoActualizar')
//Nombrando ruta
->name('categories.editarcategoria')
;
// FIN - Ruta para procesar el formulario edit


//INICIO - Ruta para eliminar una categoria 

Route::delete('{category}','CategoriesController@metodoEliminar')
//Nombrando la ruta
->name('categories.eliminarcategoria')
;

});
//FIN - Crear un grupo de rutas para definir las rutas de manera optima

*/

//------------------------------- FIN - Clase Rutas con controlador Agrupadas--------------------------------------------

//------------------------INICIO - Optimizar el codigo de agrupacion de rutas--------------------------

//Utilizamos la funcion "resource()" , este con una sola linea de codigo , nos permite llamar a todas las funciones que tenemos para hacer las acciones de las peticiones http que son , Create, Update, Delete, y mostrar
//de esta manera llamamos a todas las rutas si hacerlas una por una manuelamente
Route::
//utilizamos la funcion resource
resource(
    //creamos el prefijo o nombramos el prefijo de la ruta base
    'categories',
    //y luego llamamos al controlador que contiene laas funciones de las peticiones http
    'CategoriesController'
);    

//esto nos permite llamar a todos los metodos y ejecutar las peticiones

//------------------------FIN - Optimizar el codigo de agrupacion de rutas--------------------------
