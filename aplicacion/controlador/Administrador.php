<?php

// Un controlador en MVC es una clase
// Cada controlador debe tener un método Index

/* 
    CMS
    Controlador del MVC
    Creación 17-07-2021
*/

//Validar el acceso a través de la url

if (strpos($_SERVER['REQUEST_URI'], '.php') !== false) {
    exit('No está permitido el acceso al recurso');
}

class Administrador extends Controlador_principal
{
    function __construct()
    {
        parent::__construct();
        include('aplicacion/modelo/Administrador.php');
        //instanciar la clase del modelo
        $this->administrador = new app\modelo\Administrador;
    }

    function index()
    {
        if (sessionAdministrador() == false) {
            redirigir('administrador/login');
        }
        $datos = [
            'titulo' => 'Administrador',
            'controlador' => __CLASS__
        ];
        //incluir vista
        $this->vista('header', $datos);
        $this->vista('nav', $datos);
        $this->vista('Administrador/index');
        $this->vista('footer');
    }


    function administradors()
    {
        $datos = [
            'titulo' => 'administradors',
            'controlador' => __CLASS__
        ];
        //incluir vista
        $this->vista('header', $datos);
        $this->vista('nav', $datos);
        $this->vista('Administrador/administradors');
        $this->vista('footer');
    }



    function articulos()
    {
        $datos = [
            'titulo' => 'Artículos',
            'controlador' => __CLASS__
        ];
        //incluir vista
        $this->vista('header', $datos);
        $this->vista('nav', $datos);
        $this->vista('Administrador/articulos');
        $this->vista('footer');
    }


    function comentarios()
    {
        $datos = [
            'titulo' => 'Comentarios',
            'controlador' => __CLASS__
        ];
        //incluir vista
        $this->vista('header', $datos);
        $this->vista('nav', $datos);
        $this->vista('Administrador/Comentarios');
        $this->vista('footer');
    }


    function paginas()
    {
        $datos = [
            'titulo' => 'Páginas',
            'controlador' => __CLASS__
        ];
        //incluir vista
        $this->vista('header', $datos);
        $this->vista('nav', $datos);
        $this->vista('Administrador/paginas');
        $this->vista('footer');
    }






    function login()
    {
        $datos = [
            'titulo' => 'Inicio de sesión admin',
            'controlador' => __CLASS__
        ];
        //incluir vista
        $this->vista('header', $datos);
        $this->vista('administrador/login');
        $this->vista('footer');
    }


    //Se capturan las credenciales del Login
    function ingresar()
    {
        if (!empty($_POST)) {
            $datos = [
                'user' => $_POST['user'],
                'pass' => $_POST['pass']
            ];
            $consulta = $this->administrador->validar($datos);
            if ($consulta == true) {
                //Crear la sesión del administrador
                session_start();
                $_SESSION['administrador'] = $consulta;
                redirigir('administrador');
            } else {
                redirigir('administrador/login', 'Credenciales inválidas', 'error');
            }
        } else {
            //NEGAR EL ACCESO REDIRIGIENDO AL INICIO
            redirigir('administrador/login', 'Debe enviar datos válidos', 'error');
        }
    }



    function registrar()
    {
        echo "Método registrar corriendo...";
    }



    function comentar()
    {
        echo "Método comentar corriendo...";
    }
    function salir()
    {
        echo "Método salir corriendo...";
    }
    function mostrar()
    {
        echo "Método mostrar corriendo...";
    }
    function modificar()
    {
        echo "Método modificar corriendo...";
    }
    function eliminar()
    {
        echo "Método eliminar corriendo...";
    }
}

// construir los controladores
// Funciones
// Informacion en la URl y mostrar que se están ejecutando las funciones
