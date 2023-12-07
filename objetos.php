<?php 
include("template/header.php"); 
include "conexionbd.php";
$link=AbrirConexion();  
$CadSql="Select nombre_objeto,des_objeto,dispo_objeto,precio_objeto
from objeto;";
$resultado=EjecutarConsulta($CadSql,$link);
?>

<div class="p-5 mb-4 bg-invisible rounded-3">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">Objetos</h1>
      <p class="col-md-8 fs-4">Descripcion y Atributos</p>
      <a href="#lista" class="scroll-button btn btn-info">Descripcion</a>
      <a name="" id="" class="btn btn-info" href="atributos.php" role="button">Atributos</a>
      </div>
  </div>

<?php 
while($fila=mysqli_fetch_array($resultado))
{
?>  

<div class="panel panel-primary" id=lista>
  <div class="panel-heading text-center">
  <div class="row">
  
    <div class="col-sm-2 border border-info">Nombre</div>
    <div class="col-sm-6 border border-info">Descripcion</div>
    <div class="col-sm-2 border border-info">Disponibilidad</div>
    <div class="col-sm-2 border border-info">Precio</div>

    </div>
  </div>
</div>
  
<div class="panel-heading text-center">
<div class="row" id="lista">
  <div class="col-sm-2 border border-ligth">
        <?php echo $fila["nombre_objeto"]; ?>
    </div>
    <div class="col-sm-6 border border-ligth">
        <?php echo $fila["des_objeto"]; ?>
    </div>
    <div class="col-sm-2 border border-ligth">
        <?php echo $fila["dispo_objeto"]; ?>
    </div>
    <div class="col-sm-2 border border-ligth">
        <?php echo $fila["precio_objeto"]; ?>
    </div>

</div>
<?php 
}
?>



<?php include("template/footer.php"); ?>