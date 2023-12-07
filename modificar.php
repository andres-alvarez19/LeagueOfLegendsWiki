<?php include("template/header.php"); 
include "conexionbd.php";
$link=AbrirConexion();  
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="nombre_personaje">Nombre del personaje a modificar:</label>
    <input type="text" name="nombre_personaje" required>
    <br>
    <label for="rol_personaje">Nuevo rol del personaje:</label>
    <input type="text" name="rol_personaje" required>
    <br>
    <label for="annio_personaje">Nuevo año del personaje:</label>
    <input type="number" name="annio_personaje" required>
    <br>
    <input type="submit" value="Modificar datos">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el nombre del personaje a modificar
    $nombre_personaje = $_POST["nombre_personaje"];
    $rol_personaje = $_POST["rol_personaje"];
    $annio_personaje = $_POST["annio_personaje"];

    // Prevenir inyección de SQL usando mysqli_real_escape_string
    $nombre_personaje = mysqli_real_escape_string($link, $nombre_personaje);
    $rol_personaje = mysqli_real_escape_string($link, $rol_personaje);
    $annio_personaje = mysqli_real_escape_string($link, $annio_personaje);

    // Consulta SQL para modificar datos en la tabla
    $sql = "UPDATE personaje SET rol_personaje = '$rol_personaje', annio_personaje = '$annio_personaje' WHERE nombre_personaje = '$nombre_personaje'";

    if ($link->query($sql) === TRUE) {
        echo "Los datos se han modificado correctamente.";
    } else {
        echo "Error al modificar datos: " . $link->error;
    }
}
?>

<?php include("template/footer.php"); ?>