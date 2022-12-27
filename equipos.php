<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "liga_futbol";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO equipos (Id_Equipo, Dir_Tec, Nombre_equipo, Id_Municipio)
VALUES ('4', 'Juan Acosta', 'Deportivo Junin', '4')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

