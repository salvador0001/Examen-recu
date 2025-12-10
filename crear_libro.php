<?php 
include ('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $nombre = $_POST['nombre'];
    $autor = $_POST['autor'];
    $categorias = $_POST['categoria'];
    $paginas = $_POST['paginas'];
    $editorial = $_POST['editorial'];
    

    $sql = "INSERT INTO libros (nombre, autor, categoria, paginas, editorial) VALUES ('$nombre', '$autor', '$categorias', '$paginas', '$editorial')";
  
    if (mysqli_query($conexion, $sql)) {
        echo "<script>
        
                alert('libro registrado correctamente');
                window.location = 'admin_dashboard.php';
              </script>";
        exit();
    } else {
        echo "<script>
                alert('Error al registrar el librp: " . mysqli_error($conexion) . "');
                window.history.back();
              </script>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar libro</title>
</head>
<body>
    <div class="container mt-4">
    <h2>Registrar nuevo libro</h2>

    <form action="crear_libro.php" method="$_POST">

    <div class="form-group">
    <label for="nombre">Nombre del libro</label>
    <input type="text" class="form-control" name="nombre" required>

    <label for="autor">autor del libro</label>
    <input type="text" class="form-control" name="autor" required>

    <label for="categoria">categoria del libro</label>
    <input type="text" class="form-control" name="categoria" required>

    <label for="paginas">paginas del libro</label>
    <input type="text" class="form-control" name="paginas" maxlength="500" minlength="0" required>

    <label for="editorial">editorial del libro</label>
    <input type="text" class="form-control" name="editorial" required>
    
    </div>
    </form>
</div>


<a href="listar_libros.php">Ir al listado de libros</a>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
