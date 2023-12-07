<?php 
include("template/header.php"); 
include "conexionbd.php";
$link=AbrirConexion();  
$CadSql="Select  id_skin ,nombre_aspecto,precio_aspecto,fecha_lanzamiento,nombre_personaje
from aspecto;";
$resultado=EjecutarConsulta($CadSql,$link);
?>

<div class="panel panel-primary">
  <div class="panel-heading text-center">
  <div class="row">
    <div class="col-sm-1 border border-info">id</div>
    <div class="col-sm-3 border border-info">Nombre</div>
    <div class="col-sm-1 border border-info">Precio</div>
    <div class="col-sm-2 border border-info">Lanzamiento</div>
    <div class="col-sm-2 border border-info">Campeon</div>


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
        <?php echo $fila["id_skin"]; ?>
    </div>
    <div class="col-sm-3 border border-ligth">
        <?php echo $fila["nombre_aspecto"]; ?>
    </div>
    <div class="col-sm-1 border border-ligth">
        <?php echo $fila["precio_aspecto"]; ?>
    </div>
    <div class="col-sm-2 border border-ligth">
        <?php echo $fila["fecha_lanzamiento"]; ?>
    </div>
    <div class="col-sm-2 border border-ligth">
        <?php echo $fila["nombre_personaje"]; ?>
    </div>

</div>

<?php 
}
?>


<?php include("template/footer.php"); ?>