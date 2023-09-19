<?php
$servername = "localhost";
$username = "phpmyadmin";
$password = "RedesInformaticas";
$dbname = "db_beneitez";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$dni = $_POST["DNI"];
$tel = $_POST["telefono"];
$direccion = $_POST["direccion"];

$sql = "INSERT INTO registro (nombre, apellido, DNI, telefono, direccion) VALUES ('$nombre', '$apellido', '$dni', '$tel', '$direccion')";

if ($_POST) {
  if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
  } else {
    echo "Error al registrar: " . $conn->error;
  }
  
  // Cerrar la conexión a la base de datos
  $conn->close();
}
?>