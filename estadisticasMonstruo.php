<?php 
include("template/header.php"); 
include "conexionbd.php";
$link=AbrirConexion();  
?>

<div class="panel panel-primary">
  <div class="panel-heading text-center">
  <div class="row">
    <div class="col-sm-2 "></div>
    <div class="col-sm-2 border border-info">Nombre</div>
    <div class="col-sm-2 border border-info">Vida</div>
    <div class="col-sm-6 border border-info">Vel. Movimiento</div>
    <div class="col-sm-6 border border-info">Daño</div>
    <div class="col-sm-6 border border-info">Vel. Ataque</div>
    <div class="col-sm-6 border border-info">Armadura</div>
    <div class="col-sm-6 border border-info">Resis. Magica</div>

    </div>
  </div>
</div>
  
<div class="panel-heading text-center">
<div class="row" id="lista">
    <div class="col-sm-2">
        <img class="card-img-top" src="./img/wards.jpg" alt="">
    </div>
    <div class="col-sm-2 border border-ligth">
        <?php echo "Latino America"; ?>
    </div>
    <div class="col-sm-2 border border-ligth">
        <?php echo "Latino America Norte"; ?>
    </div>
    <div class="col-sm-6 border border-ligth">
        <?php echo "hola"; ?>
    </div>
    <div class="col-sm-2 border border-ligth">
        <?php echo "Latino America"; ?>
    </div>
    <div class="col-sm-2 border border-ligth">
        <?php echo "Latino America Norte"; ?>
    </div>
    <div class="col-sm-6 border border-ligth">
        <?php echo "hola"; ?>
    </div>
    <div class="col-sm-6 border border-ligth">
        <?php echo "hola"; ?>
    </div>

</div>



<?php include("template/footer.php"); ?>