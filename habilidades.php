<?php 
include("template/header.php"); 
include "conexionbd.php";
$link=AbrirConexion();  
$CadSql="Select  nombre_personaje  ,pasiva,habi_q,habi_w,habi_e,habi_r
from habilidad;";
$resultado=EjecutarConsulta($CadSql,$link);
?>
<div class="panel panel-primary">
  <div class="panel-heading text-center">
  <div class="row">
  
      <div class="col-sm-1 border border-info">Nombre</div>
      <div class="col-sm-3 border border-info">Pasiva</div>
      <div class="col-sm-2 border border-info">Q</div>
      <div class="col-sm-2 border border-info">W</div>
      <div class="col-sm-2 border border-info">E</div>
      <div class="col-sm-2 border border-info">R</div>
  </div>
</div>
<?php 
while($fila=mysqli_fetch_array($resultado))
{
?> 
      
<div class="row">
    <div class="col-sm-1 border border-ligth">
        <?php echo $fila["nombre_personaje"]; ?>
    </div>
    <div class="col-sm-3 border border-ligth">
        <?php echo $fila["pasiva"]; ?>
    </div>
    <div class="col-sm-2 border border-ligth">
        <?php echo $fila["habi_q"]; ?>
    </div>
    <div class="col-sm-2 border border-ligth">
        <?php echo $fila["habi_w"]; ?>
    </div>
    <div class="col-sm-2 border border-ligth">
        <?php echo $fila["habi_e"]; ?>
    </div>
    <div class="col-sm-2 border border-ligth">
        <?php echo $fila["habi_r"]; ?>
    </div>

</div>
<?php 
}
?>


<?php include("template/footer.php"); ?>