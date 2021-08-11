<?php
/* 
    CMS
    Archivo conexión a la base de datos
    Creación 24-07-2021
*/

//Validar el acceso a través de la url

if (strpos($_SERVER['REQUEST_URI'], '.php') !== false) {
    exit('No está permitido el acceso al recurso');
}

//PDO
// Nos permite interactuar con la base de datos y permite manipular ciertas funcionalidades. 
// También permite retornar los registros como objetos
// $host = 'localhost';
// $dbname = 'cms_s';
// $usuario = 'root';
// $clave = '';
//Instanciar la clase pdo
// $db = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';', $usuario, $clave);


$host = '172.16.10.16\\DBABC21';
$dbname = 'BotRepecev';
$usuario = 'Operativo';
$clave = 'Repecev2019*';

$db = new PDO('sqlsrv:Server=' . $host . ';Database=' . $dbname . ';', $usuario, $clave);

// new PDO("sqlsrv:Server=localhost;Database=testdb", "NombreUsuario", "Contraseña");

// $db = new PDO("sqlsrv:Server=YouAddress;Database=YourDatabase", "Username", "Password");



// $db->exec('SET character set utf8');

//STMT, transacciones (Statements) con la base de datos
function stmt($consulta)
{
    $resultado = null;
    if (!empty($consulta)) {
        $resultado = new ArrayObject($consulta->fetchAll(PDO::FETCH_CLASS, 'stdClass'));
    }
    return $resultado;
}

//Llave de encriptación
function llave()
{
    return '-mCd!!Pm**-';
}
