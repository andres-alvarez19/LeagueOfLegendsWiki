<?php 
include("template/header.php"); 
include "conexionbd.php";
$link=AbrirConexion();  
?>

<div class="panel panel-primary">
  <div class="panel-heading text-center">
  <div class="row justify-content-center align-items-center g-2">

  <div class="col-sm-1  border border-info ">Nombre Objeto</div>
  <div class="col-sm-1 border border-info">Poder Ataque</div>
    <div class="col-sm-1 border border-info">Poder Habilidad</div>
    <div class="col-sm-1 border border-info">Resistencia Fisica</div>
    <div class="col-sm-1 border border-info">Resistencia Magica</div>
    <div class="col-sm-1 border border-info">Velocidad Movimiento</div>
    <div class="col-sm-1 border border-info">Salud Objeto</div>
    <div class="col-sm-1 border border-info">Velocidad Ataques</div>

    </div>
  </div>
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading text-center">
  <div class="row justify-content-center align-items-center g-2">

  <div class="col-sm-1 border border-ligth">
        <?php echo "nombre objeto"; ?>
    </div>
  <div class="col-sm-1 border border-ligth">
        <?php echo "Poder Ataque"; ?>
    </div>
    <div class="col-sm-1 border border-ligth">
        <?php echo "Poder Habilidad"; ?>
    </div>
    
    <div class="col-sm-1 border border-ligth">
        <?php echo "Resistencia Fisica"; ?>
    </div>
    <div class="col-sm-1 border border-ligth">
        <?php echo "Resistencia Magica"; ?>
    </div>
    <div class="col-sm-1 border border-ligth">
        <?php echo "Velocidad Movimiento"; ?>
    </div>
    <div class="col-sm-1 border border-ligth">
        <?php echo "Salud Objeto"; ?>
    </div>
    <div class="col-sm-1 border border-ligth">
        <?php echo "Velocidad Ataque"; ?>
    </div>



<?php include("template/footer.php"); ?>