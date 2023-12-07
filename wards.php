<?php 
include("template/header.php"); 
include "conexionbd.php";
$link=AbrirConexion();  
$CadSql="Select  nombre_ward,aspecto_visual,dispo_ward,precio_ward
from ward;";
$resultado=EjecutarConsulta($CadSql,$link);
?>

<div class="panel panel-primary">
  <div class="panel-heading text-center">
  <div class="row">

    <div class="col-sm-3 border border-info">Nombre</div>
    <div class="col-sm-4 border border-info">Aspecto</div>
    <div class="col-sm-3 border border-info">Disponibilidad</div>
    <div class="col-sm-1 border border-info">Precio</div>


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
        <?php echo $fila["nombre_ward"]; ?>
    </div>
    <div class="col-sm-4 border border-ligth">
        <?php echo $fila["aspecto_visual"]; ?>
    </div>
    <div class="col-sm-3 border border-ligth">
        <?php echo $fila["dispo_ward"]; ?>
    </div>
    <div class="col-sm-1 border border-ligth">
        <?php echo $fila["precio_ward"]; ?>
    </div>

</div>
<?php 
}
?>




<?php include("template/footer.php"); ?>