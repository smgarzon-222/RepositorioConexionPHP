<?php

include("conexion.php");
$con=conectar();

$Id_Posicion=$_POST['Id_Posicion'];
$Nombre_Posicion=$_POST['Nombre_Posicion'];

$sql="UPDATE posiciones SET Id_Posicion='$Id_Posicion',Nombre_Posicion='$Nombre_Posicion' WHERE Id_Posicion='$Id_Posicion'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: posiciones.php");
    }


?>