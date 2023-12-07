<?php include("template/header.php"); 
include "conexionbd.php";
$link=AbrirConexion();  
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="text" name="busqueda" placeholder="Ingrese el nombre del personaje">
    <input type="submit" value="Buscar">
</form>

<?php
	$servidor="localhost";
	$usuario="root";
	$clave="";
	$bd="bd_wiki";
$conn = new mysqli($servidor, $usuario, $clave, $bd);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el término de búsqueda
    $termino_busqueda = $_POST["busqueda"];

    // Prevenir inyección de SQL usando mysqli_real_escape_string
    $termino_busqueda = mysqli_real_escape_string($conn, $termino_busqueda);

    // Consulta SQL para buscar en la tabla
    $sql = "SELECT * FROM personaje WHERE nombre_personaje LIKE '%$termino_busqueda%'";
    $result = $conn->query($sql);

    // Mostrar resultados
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Aquí puedes mostrar los resultados
            echo   "Nombre: " . $row["nombre_personaje"] . " rol: " . $row["rol_personaje"] ." año: " . $row["annio_personaje"] ."<br>";
        }
    } else {
        echo "No se encontraron resultados.";
    }
}

?>






<?php include("template/footer.php"); ?>