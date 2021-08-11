<?php

/* 
    CMS
    Controlador del MVC
    Creación 17-07-2021
*/

//Validar el acceso a través de la url

if (strpos($_SERVER['REQUEST_URI'], '.php') !== false) {
    exit('No está permitido el acceso al recurso');
}

class Articulo extends Controlador_principal
{
    function __construct()
    {
        parent::__construct();
    }


    function index()
    {
        $datos = [
            'titulo' => 'Artículos',
            'controlador' => __CLASS__
        ];
        //incluir vista
        $this->vista('header', $datos);
        $this->vista('nav', $datos);
        $this->vista('Articulo/index');
        $this->vista('footer');
    }


    function crear()
    {
        echo "Método crear corriendo...";
    }
    function modificar()
    {
        echo "Método modificar corriendo...";
    }
    function eliminar()
    {
        echo "Método eliminar corriendo...";
    }
    function mostrar()
    {
        echo "Método mostrar corriendo...";
    }
}

// construir los controladores
// Funciones
// Informacion en la URl y mostrar que se están ejecutando las funciones
