<?php session_start();
if (!$_SESSION['ingreso']){
    header('location: index.php?ruta=login');
    exit();
}?>
<div class="text-center">
    <a href="index.php?ruta=salir" class="btn btn-primary btn-newsletter">Cerrar Sesion</a>
</div>