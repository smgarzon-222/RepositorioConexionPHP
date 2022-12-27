<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "liga_futbol";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$sql = "INSERT INTO municipios (Id_Municipio, Nombre_Municipio)
VALUES ('4', 'Junin')";

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>