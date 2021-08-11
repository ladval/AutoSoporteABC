<?php

namespace app\modelo;
//namespace siempre por regla debe ir al inicio del archivo o genera error
/* 
    CMS
    Controlador del MVC
    Creación 17-07-2021
*/
//Validar el acceso a través de la url
if (strpos($_SERVER['REQUEST_URI'], '.php') !== false) {
    exit('No está permitido el acceso al recurso');
}

class Administrador
{
    protected $midb;
    function __construct()
    {
        require_once('aplicacion/configuracion/conn.php');
        $this->midb = $db;
    }
    //Validar sí existe el usuario
    function validar($credencial)
    {
        $sql = $this->midb->query("
        SELECT
            aid, 
            nombre
        FROM administrador
        WHERE 
            email = '" . $credencial['user'] . "' AND
            clave = aes_encrypt('" . $credencial['pass'] . "','" . llave() . "') AND
            estado = 1;
       ");
        $resultado = stmt($sql);
        return ($resultado->count() > 0) ? $resultado[0] : false;
    }
}
