<?php 
// Configuracion necesaria para acceder a la base de datos
function conn(){
    $hostname = "localhost";
    $usuariodb = "root";
    $password = "";
    $dbname = "escuela";

    // Generando la conexion con el servidor
    $conectar = mysql_connect($hostname, $usuariodb, $password, $dbname);
    return $conectar;

}

?>