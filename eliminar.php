<?php include("template/header.php"); 
include "conexionbd.php";
$link=AbrirConexion();  
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="text" name="nombre_personaje" placeholder="Ingrese el nombre del personaje a eliminar">
    <input type="submit" value="Eliminar">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el nombre del personaje a eliminar
    $nombre_personaje = $_POST["nombre_personaje"];

    // Prevenir inyección de SQL usando mysqli_real_escape_string
    $nombre_personaje = mysqli_real_escape_string($link, $nombre_personaje);

    // Consulta SQL para eliminar la fila de la tabla
    $sql = "DELETE FROM personaje WHERE nombre_personaje = '$nombre_personaje'";
    if ($link->query($sql) === TRUE) {
        echo "La fila se ha eliminado correctamente.";
    } else {
        echo "Error al eliminar la fila: " . $link->error;
    }
}
?>

<?php include("template/footer.php"); ?>