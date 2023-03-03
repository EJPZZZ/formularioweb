<?php
include_once ('db.php');

//Recibo todos los datos del formulario
$nombres=$_POST['Nombres'];
$gradoygrupo=$_POST['Grado y grupo'];
$turno=$_POST['Turno'];
$numero=$_POST['Numero'];
$direccion=$_POST['Direccion'];
$email=$_POST['Email'];

echo "Los datos son los siguientes: <br>";
echo "$Nombres, $gradoygrupo, $turno, $numero, $direccion y $email";

$conectar=conn(); //ejecuta las conexiones a la bd
$sql="INSERT INTO escuela (Nombres, Grado y grupo, Turno, Numero, Direccion, Email)
      VALUES ('$nombres', '$gradoygrupo', '$turno', '$numero', '$direccion', '$email')";
$result = mysqli_query($conectar, $sql) or trigger_error("Query Failed! SQL-Error:". mysqli_error($conectar), E_USER_ERROR);
echo "$sql";
?>
