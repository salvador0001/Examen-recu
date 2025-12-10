<?php
$servername = "sql200.infinityfree.com";
$username = "if0_40647617";
$password = "salba017";
$database = "if0_40647617_examen_recu";

$conexion = new mysqli($servername, $username, $password, $database);

if ($conexion->connect_error) {
    echo ("Conexión fallida: " . $conexion->connect_error);
}

echo "Conectado exitosamente";
?>



