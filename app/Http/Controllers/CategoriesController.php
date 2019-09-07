<?php

namespace App\Http\Controllers;

//fijarse que sea este path que utilize para procesar los datos
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //INICIO - Envio de datos desde el controlador hacia las Routes
    
    public function primeraFuncion (){
        return 'Lista de Categorias, desde un controlador ';
    }

    //FIN - Envio de datos desde el controlador hacia las Routes

    //INICIO - Funcion Crear Categoria

    public function crearCategoria (){
        return 'Se retornara una vista para categroias';
    }

    //Fin - Funcion Crear Categoria

    //INICIO - Funcion que permite enviar o procesar los datos hacia la base

    public function metodoPost(Request $request){
        return 'Aqui se procesan o reciben los datos recibidos de crear categoria y se redirije a otra pagina, puede ser inicio o otros';
        //PÑara evitar reenvios de formularios cuando se recarrga una pagina, hay que redireccionar a otro lado , por motivos de seguirdad
    }

    //FIN - Funcion que permite enviar o procesar los datos hacia la base

    //INCIO -   Mostrar categoria con parametro
    public function mostrarCategoria(
        //Aqui podemos enviar el parametro que necesitemos, por lo general, en la base de datos se utilizan los id, para identificar que dato queremos mostrar
        $id
    ){
        return 'Aqui se muestra los datos de una categoria dada.';
    }
    //FIN -   Mostrar categoria con parametro

    //INICIO - Mostrar el formulario que nos permite editar el formulario

    public function metodoEditar (){
        return 'Aqui se muestra el formulario para editar una categopria dada.';
    }

    //FIN - Mostrar el formulario que nos permite editar el formulario

    //INICIO - Funcion para procesar el formulario de Editar
    public function metodoActualizar(){
        return 'Aqui se procesan y se edita una categoria dada.';
    }
    //FIN - Funcion para procesar el formulario de Editar

    public function metodoEliminar(){
        return 'Aqui se eliminan los datos de una categoria dada';
    }

}
