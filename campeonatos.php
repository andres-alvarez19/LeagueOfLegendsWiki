<?php 
include("template/header.php"); 
include "conexionbd.php";
$link=AbrirConexion();  
$CadSql="Select  annio_campeonato ,lugar_campeonato,equipo_ganador ,des_ultimo_juego
from campeonato_mundial;";
$resultado=EjecutarConsulta($CadSql,$link);
?>

<div class="panel panel-primary">
  <div class="panel-heading text-center">
  <div class="row">
    <div class="col-sm-1 border border-info">Año</div>
    <div class="col-sm-3 border border-info">Ubicacion</div>
    <div class="col-sm-2 border border-info">Equipo Ganador</div>
    <div class="col-sm-6 border border-info">Descripcion</div>
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
        <?php echo $fila["annio_campeonato"]; ?>
    </div>
    <div class="col-sm-3 border border-ligth">
        <?php echo $fila["lugar_campeonato"]; ?>
    </div>
    <div class="col-sm-2 border border-ligth">
        <?php echo $fila["equipo_ganador"]; ?>
    </div>    
    <div class="col-sm-6 border border-ligth">
        <?php echo $fila["des_ultimo_juego"]; ?>
    </div>

</div>
<?php
}
?> 


<?php include("template/footer.php"); ?>