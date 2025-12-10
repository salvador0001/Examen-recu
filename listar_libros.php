<?php 
include('conexion.php');

$sql = " SELECT * libros";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de libros</title>
</head>
<body>


<H2>Listado de libros</H2>

    

<a href="crear_libro.php"> crear un nuevo libro</a>
<a href="crear_categoria.php">crear categoria</a>
<a href="prestamo.php">pedir un prestamo</a>
</body>
</html>