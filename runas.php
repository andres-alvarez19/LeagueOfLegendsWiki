<?php 
include("template/header.php"); 
include "conexionbd.php";
$link=AbrirConexion();  
$CadSql="Select nombre_runa ,des_runa,ruta
from runa;";
$resultado=EjecutarConsulta($CadSql,$link);
?>

<div class="panel panel-primary">
  <div class="panel-heading text-center">
  <div class="row">
    <div class="col-sm-3 border border-info">Nombre</div>
    <div class="col-sm-6 border border-info">Descripcion</div>
    <div class="col-sm-2 border border-info">Ruta</div>


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
        <?php echo $fila["nombre_runa"]; ?>
    </div>
    <div class="col-sm-6 border border-ligth">
        <?php echo $fila["des_runa"]; ?>
    </div>
    <div class="col-sm-2 border border-ligth">
        <?php echo $fila["ruta"]; ?>
    </div>

</div>
<?php 
}
?>




<?php include("template/footer.php"); ?>