<?php 
include("template/header.php"); 
include "conexionbd.php";
$link=AbrirConexion();
?>

<div class="col-md-3">
<div class="card">
    <img class="card-img-top" src="./img/objetos.jpg" alt="">
    <div class="card-body">
        <h4 class="card-title">Objetos</h4>
        <a name="" id="" class="btn btn-info" href="objetos.php" role="button">Ver mas</a>
    </div>
</div>  
</div>

<div class="col-md-3">
<div class="card">
    <img class="card-img-top" src="./img/runas.jpg" alt="">
    <div class="card-body">
        <h4 class="card-title">Runas</h4>
        <a name="" id="" class="btn btn-info" href="runas.php" role="button">Ver mas</a>
    </div>
</div>  
</div>

<div class="col-md-3">
<div class="card">
    <img class="card-img-top" src="./img/wards.jpg" alt="">
    <div class="card-body">
        <h4 class="card-title">Wards</h4>
        <a name="" id="" class="btn btn-info" href="wards.php" role="button">Ver mas</a>
    </div>
</div>  
</div>

<div class="col-md-3">
<div class="card">
    <img class="card-img-top" src="./img/skins.jpg" alt="">
    <div class="card-body">
        <h4 class="card-title">Skins</h4>
        <a name="" id="" class="btn btn-info" href="skins.php" role="button">Ver mas</a>
    </div>
</div>  
</div>



<?php include("template/footer.php"); ?>