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

class Usuario extends Controlador_principal
{
    protected $usuario;
    function __construct()
    {
        parent::__construct();
        //incluir archivo del modelo
        include('aplicacion/modelo/Usuario.php');
        //instanciar la clase del modelo
        $this->usuario = new app\modelo\Usuario;
    }


    function index()
    {
        if (sessionUsuario() == false) {
            redirigir('usuario/login');
        }

        echo "<pre>";
        print_r(sessionUsuario());
        echo "</pre>";

        $datos = [
            'titulo' => 'Usuario',
            'controlador' => __CLASS__
        ];
        //incluir vista
        $this->vista('header', $datos);
        $this->vista('nav', $datos);
        $this->vista('Usuario/index');
        $this->vista('footer');
        echo 'Bienvenid@ al sistema...';
    }

    function login()
    {
        $datos = [
            'titulo' => 'Login',
            'controlador' => __CLASS__
        ];
        //incluir vista
        $this->vista('header', $datos);
        $this->vista('usuario/login');
        $this->vista('footer');
    }

    function usuarios()
    {
        $datos = [
            'titulo' => 'Usuarios',
            'controlador' => __CLASS__
        ];
        //incluir vista
        $this->vista('header', $datos);
        $this->vista('nav', $datos);
        $this->vista('Administrador/usuarios');
        $this->vista('footer');
        echo 'Bienvenid@ al sistema...';
    }

    function intercomex()
    {
        $datos = [
            'titulo' => 'Intercomex',
            'controlador' => __CLASS__
        ];
        //incluir vista
        $this->vista('header', $datos);
        $this->vista('nav', $datos);
        $this->vista('usuario/intercomex');
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
            $consulta = $this->usuario->validar($datos);
            if ($consulta == true) {
                //Crear la sesión del usuario
                session_start();
                $_SESSION['usuario'] = $consulta;
                redirigir('usuario');
            } else {
                redirigir('usuario/login', 'Credenciales inválidas', 'error');
            }
        } else {
            //NEGAR EL ACCESO REDIRIGIENDO AL INICIO
            redirigir('usuario/login', 'Debe enviar datos válidos', 'error');
        }
    }


    function radicado()
    {
        ini_set('max_execution_time', 10);
        $output = shell_exec('powershell -command C:\xampp\htdocs\ABC\assets\exe\intercomex\robot.ps1');
        echo $output;
        // redirigir('usuario/intercomex', $output, 'success');
    }

    function registrar()
    {
        echo "<h4>Método registrar administrador</h4>";
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
    }

    function comentar()
    {
        echo "<h4>Método comentar administrador</h4>";
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
    }
    function salir()
    {
        echo "<h4>Método salir administrador</h4>";
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
    }
    function mostrar()
    {
        echo "<h4>Método mostrar administrador</h4>";
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
    }
    function modificar()
    {
        echo "<h4>Método modificar administrador</h4>";
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
    }
    function eliminar()
    {
        echo "<h4>Método eliminar administrador</h4>";
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
    }
}

// construir los controladores
// Funciones
// Informacion en la URl y mostrar que se están ejecutando las funciones
