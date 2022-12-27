<?php
function conectar(){

  $servername = "localhost";
  $username = "root";
  $password = "";
  $bd="liga_futbol";
 
  // Crear conexion
  
  $con = mysqli_connect($servername,$username, $password);
  
  mysqli_select_db($con,$bd);

  return $con;
}
?>
