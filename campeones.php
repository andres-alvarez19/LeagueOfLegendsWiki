<?php 
include("template/header.php"); 
include "conexionbd.php";
$link=AbrirConexion();  
$CadSql="Select  nombre_personaje ,rol_personaje,annio_personaje
from personaje;";
$resultado=EjecutarConsulta($CadSql,$link);
?>

<h1></h1>
<div class="p-5 mb-4 bg-invisible rounded-3">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">Campeones</h1>
      <p class="col-md-8 fs-4">Esta pagina mostrara campeones y sus cambios</p>
      <a href="#lista" class="scroll-button btn btn-info">Lista Campeones</a>

      <a name="" id="" class="btn btn-info" href="habilidades.php" role="button">Lista Habilidades</a>
      
      </div>
  </div>

  
<div class="panel panel-primary">
  <div class="panel-heading text-center">
  <div class="row">
      <div class="col-sm-2 border border-info">Nombre</div>
      <div class="col-sm-2 border border-info">Rol</div>
      <div class="col-sm-2 border border-info">Fecha Lanzamiento</div>
      <div class="col-sm-2 border border-info">Habilidades</div>
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
        <?php echo $fila["nombre_personaje"]; ?>
    </div>
    <div class="col-sm-2 border border-ligth">
        <?php echo $fila["rol_personaje"]; ?>
    </div>
    <div class="col-sm-2 border border-ligth">
        <?php echo $fila["annio_personaje"]; ?>
    </div>
    <div class="col-sm-2 border border-ligth">
      <a name="" id="" class="btn btn-ligth" href="habilidades.php" role="button">Ver Habilidades</a>
    </div>
    </div>
</div>
<?php 
}
?>


<?php include("template/footer.php"); ?>