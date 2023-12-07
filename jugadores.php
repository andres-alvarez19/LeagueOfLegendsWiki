<?php 
include("template/header.php"); 
include "conexionbd.php";
$link=AbrirConexion();  
$CadSql="Select  cod_jugador ,nombre_jugador,apodo,nacionalidad_jugador,logros_jugador,roles_jugador,
des_jugador,equipo_jugador
from jugador_profesional;";
$resultado=EjecutarConsulta($CadSql,$link);
?>

<div class="panel panel-primary">
  <div class="panel-heading text-center">
  <div class="row">
  <div class="col-sm-1 border border-info">ID</div>
    <div class="col-sm-1 border border-info">Nombre & Apodo</div>
    <div class="col-sm-1 border border-info">Nacionalidad </div>
    <div class="col-sm-2 border border-info">Logros</div>
    <div class="col-sm-1 border border-info">Roles </div>
    <div class="col-sm-2 border border-info">Descripcion</div>
    <div class="col-sm-2 border border-info">Equipo</div>
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
        <?php echo $fila["cod_jugador"]; ?>
    </div>
    <div class="col-sm-1 border border-ligth">
        <?php echo $fila["nombre_jugador"]; ?>
        <?php echo "'",$fila["apodo"],"'"; ?>
    </div>
    <div class="col-sm-1 border border-ligth">
        <?php echo $fila["nacionalidad_jugador"]; ?>
    </div>    
    <div class="col-sm-2 border border-ligth">
        <?php echo $fila["logros_jugador"]; ?>
    </div>
    <div class="col-sm-1 border border-ligth">
        <?php echo $fila["roles_jugador"]; ?>
    </div>
    <div class="col-sm-2 border border-ligth">
        <?php echo $fila["des_jugador"]; ?>
    </div>
    <div class="col-sm-2 border border-ligth">
        <?php echo $fila["equipo_jugador "]; ?>
    </div>

</div>
<?php
}
?> 


<?php include("template/footer.php"); ?>