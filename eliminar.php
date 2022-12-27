<?php

include("conexion.php");
$con=conectar();

$Id_Posicion=$_GET['id'];

$sql="DELETE FROM posiciones where Id_Posicion='$Id_Posicion'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: posiciones.php");
    }
?>