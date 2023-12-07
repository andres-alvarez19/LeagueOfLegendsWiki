<?php 
include("template/header.php"); 
include "conexionbd.php";
$link=AbrirConexion();  
$CadSql="Select nombre_mapa,des_mapa,annio_creacion
from mapa;";
$resultado=EjecutarConsulta($CadSql,$link);
?>

<div class="panel panel-primary">
  <div class="panel-heading text-center">
  <div class="row">
    <div class="col-sm-2 border border-info">Nombre</div>
    <div class="col-sm-2 border border-info">Fecha Creacion</div>
    <div class="col-sm-6 border border-info">Descripcion</div>
    </div>
  </div>
</div>
  
<?php 
while($fila=mysqli_fetch_array($resultado))
{
?>
<div class="panel panel-primary">
  <div class="panel-heading text-center">
    <div class="row">
        <div class="col-sm-2 border border-ligth ">
            <?php echo $fila["nombre_mapa"]; ?>
        </div>
        <div class="col-sm-2 border border-ligth">
            <?php echo $fila["annio_creacion"]; ?>
        </div>
        <div class="col-sm-6 border border-ligth">
            <?php echo $fila["des_mapa"]; ?>
        </div>
    </div>
    </div>
    </div>
    <?php 
}
?>



<?php include("template/footer.php"); ?>