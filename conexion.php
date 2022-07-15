<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$base = "bs_integradora";

// Crear una variable para la conexion 
$conn = mysqli_connect ($servidor, $usuario, $password, $base);

// Comprobar la conexion 
if(!$conn)
{
  die("Error al realizar la conexion".mysqli_connect_error());
}
echo "Conexion realizada exitosamente";

?>