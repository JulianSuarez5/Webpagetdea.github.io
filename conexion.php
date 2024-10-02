<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdintroduccion";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}else{
    echo("Conectado");
}
?>