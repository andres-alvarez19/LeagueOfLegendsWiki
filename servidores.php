<?php 
include("template/header.php"); 
include "conexionbd.php";
$link=AbrirConexion();  
$CadSql="Select nombre_servidor,num_jugadores,ubi_servidor,fecha_creacion
from servidor;";
$resultado=EjecutarConsulta($CadSql,$link);
?>

<div class="panel panel-primary">
    <div class="panel-heading text-center">
    <div class="row">
    <div class="col-sm-3 border border-info">Nombre</div>
    <div class="col-sm-3 border border-info">Jugadores</div>
    <div class="col-sm-3 border border-info">Ubicacion</div>
    <div class="col-sm-3 border border-info">Fecha Creacion</div>
    </div>
</div>

<?php 
while($fila=mysqli_fetch_array($resultado))
{
?>  
<div class="panel-heading text-center">
<div class="row">
    <div class="col-sm-3 border border-ligth">
        <?php echo $fila["nombre_servidor"]; ?>
    </div>
    <div class="col-sm-3 border border-ligth">
        <?php echo $fila["num_jugadores"]; ?>
    </div>
    <div class="col-sm-3 border border-ligth">
        <?php echo $fila["ubi_servidor"]; ?>
    </div>
    <div class="col-sm-3 border border-ligth">
        <?php echo $fila["fecha_creacion"]; ?>
    </div>
    </div>
</div>
<?php 
}
?>
<?php include("template/footer.php"); ?>