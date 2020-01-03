<?php session_start();
if (!$_SESSION['ingreso']) {
    header('location: index.php?ruta=login');
    exit();
} ?>
<div class="text-center">
    <?php mensajes::exito('Accediste al recurso');?>
    <h1 class="text-center">echo, ingresado</h1>
    <a href="index.php?ruta=salir" class="btn btn-primary btn-newsletter">Cerrar Sesion</a>
</div>