
<?php
include('conexion.php');

$id = $_GET['id'];

$sql = "DELETE FROM categoria WHERE id = '$id'";

if (mysqli_query($conexion, $sql)) {
    echo "<script>
            alert('categoria eliminado');
            window.location = 'listar_libros.php'; 
          </script>";
    exit();
} else {
    echo "<script>
            alert('Error la categoria: " . mysqli_error($conexion) . "');
            window.history.back();
          </script>";
    exit();
}
?>


