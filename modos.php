<?php 
include("template/header.php"); 
include "conexionbd.php";
$link=AbrirConexion();  
$CadSql="Select nombre_modos_de_juego,des_modo_de_juego,dis_modo_de_juego,mapa_modo_de_juego
from modos_de_juego;";
$resultado=EjecutarConsulta($CadSql,$link);
?>

<div class="panel panel-primary">
  <div class="panel-heading text-center">
  <div class="row">
    <div class="col-sm-3 border border-info">Nombre</div>
    <div class="col-sm-3 border border-info">Descripcion</div>
    <div class="col-sm-3 border border-info">Disponibilidad</div>
    <div class="col-sm-3 border border-info">Mapa</div>

    </div>
  </div>
</div>
  
<?php 
while($fila=mysqli_fetch_array($resultado))
{
?>
<div class="panel-heading text-center">
<div class="row" id="lista">
    <div class="col-sm-3 border border-ligth">
        <?php echo $fila["nombre_modos_de_juego"]; ?>
    </div>
    <div class="col-sm-3 border border-ligth">
        <?php echo $fila["des_modo_de_juego"]; ?>
    </div>
    <div class="col-sm-3 border border-ligth">
        <?php echo $fila["dis_modo_de_juego"]; ?>
    </div>
    <div class="col-sm-3 border border-ligth">
        <?php echo $fila["mapa_modo_de_juego"]; ?>
    </div>
</div>
<?php 
}
?>


<?php include("template/footer.php"); ?>

