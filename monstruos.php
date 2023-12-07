<?php 
include("template/header.php"); 
include "conexionbd.php";
$link=AbrirConexion();  
$CadSql="Select nombre_monstruo,des_monstruo,botin,experiencia,bonificacion,reaparicion,ubicacion,mapa
from monstruo;";
$resultado=EjecutarConsulta($CadSql,$link);
?>

<div class="panel panel-primary">
  <div class="panel-heading text-center">
  <div class="row">
    <div class="col-sm-1 border border-info">Nombre</div>
    <div class="col-sm-1 border border-info">Descripcion</div>
    <div class="col-sm-1 border border-info">Botin</div>
    <div class="col-sm-1 border border-info">Experiencia</div>
    <div class="col-sm-1 border border-info">Bonificacion</div>
    <div class="col-sm-1 border border-info">Reaparicion</div>
    <div class="col-sm-1 border border-info">Ubicacion</div>
    <div class="col-sm-1 border border-info">Mapa</div>
    </div>
  </div>
</div>

<?php 
while($fila=mysqli_fetch_array($resultado))
{
?>
<div class="panel-heading text-center">
<div class="row" id="lista">
    <div class="col-sm-1 border border-ligth">
        <?php echo $fila["nombre_monstruo"]; ?>
    </div>
    <div class="col-sm-1 border border-ligth">
        <?php echo $fila["des_monstruo"]; ?>
    </div>
    <div class="col-sm-1 border border-ligth">
        <?php echo $fila["botin"]; ?>
    </div>
    <div class="col-sm-1 border border-ligth">
        <?php echo $fila["experiencia"]; ?>
    </div>
    <div class="col-sm-1 border border-ligth">
        <?php echo $fila["bonificacion"]; ?>
    </div>
    <div class="col-sm-1 border border-ligth">
        <?php echo $fila["reaparicion"]; ?>
    </div>
    <div class="col-sm-1 border border-ligth">
        <?php echo $fila["ubicacion"]; ?>
    </div>
    <div class="col-sm-1 border border-ligth">
        <?php echo $fila["mapa"]; ?>
    </div>
    <?php 
}
?>
</div>



<?php include("template/footer.php"); ?>