
<?php
include('conexion.php');

$id = $_GET['id'];

$sql = "DELETE FROM libro WHERE id = '$id'";

if (mysqli_query($conexion, $sql)) {
    echo "<script>
            alert('libro eliminado');
            window.location = 'listar_libros.php'; 
          </script>";
    exit();
} else {
    echo "<script>
            alert('Error al eliminar el libro: " . mysqli_error($conexion) . "');
            window.history.back();
          </script>";
    exit();
}
?>


