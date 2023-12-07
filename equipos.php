<?php 
include("template/header.php"); 
include "conexionbd.php";
$link=AbrirConexion();  
$CadSql="Select  nombre_equipo,mundiales_ganados,annios_ganados,creacion_equipo,nacionalidad_equipo
from equipos;";
$resultado=EjecutarConsulta($CadSql,$link);
?>

<div class="panel panel-primary">
  <div class="panel-heading text-center">
  <div class="row">
    <div class="col-sm-2 border border-info">Nombre</div>
    <div class="col-sm-2 border border-info">Mundiales Ganados</div>
    <div class="col-sm-2 border border-info">Años ganados</div>
    <div class="col-sm-2 border border-info">Creacion</div>
    <div class="col-sm-2 border border-info">Nacionalidad</div>



    </div>
  </div>
</div>
<?php 
while($fila=mysqli_fetch_array($resultado))
{
?> 
<div class="panel-heading text-center">
<div class="row" id="lista">
    <div class="col-sm-2 border border-ligth">
        <?php echo $fila["nombre_equipo"]; ?>
    </div>
    <div class="col-sm-2 border border-ligth">
        <?php echo $fila["mundiales_ganados"]; ?>
    </div>
    <div class="col-sm-2 border border-ligth">
        <?php echo $fila["annios_ganados"]; ?>
    </div>
    <div class="col-sm-2 border border-ligth">
        <?php echo $fila["creacion_equipo"]; ?>
    </div>
    <div class="col-sm-2 border border-ligth">
        <?php echo $fila["nacionalidad_equipo"]; ?>
    </div>

</div>
<?php 
}
?>



<?php include("template/footer.php"); ?>