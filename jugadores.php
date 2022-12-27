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

$sql = "INSERT INTO jugadores (Id_Jugador, Nombre_Jugador, Numero, Id_Equipo, Id_Posicion)
VALUES ('11', 'Beto Cuervo', '20', '4', '3')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>