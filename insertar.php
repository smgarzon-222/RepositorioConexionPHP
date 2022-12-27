<?php include("conexion.php");
$con = conectar();

$Id_Posicion=$_POST['Id_Posicion'];
$Nombre_Posicion=$_POST['Nombre_Posicion'];


$sql="INSERT INTO posiciones VALUES('$Id_Posicion','$Nombre_Posicion')";
$query=mysqli_query($con, $sql);

if ($query) {
    Header("Location: posiciones.php");
} else {
}
?>