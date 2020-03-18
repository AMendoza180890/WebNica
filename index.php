<?php
require_once 'controladores/rutasC.php';
require_once 'controladores/contactoC.php';
require_once 'controladores/AdminC.php';
require_once 'controladores/empleado.php';
require_once 'controladores/slideC.php';

require_once 'Modelos/rutasM.php';
require_once 'Modelos/contactoM.php';
require_once 'Modelos/AdminM.php';
require_once 'Modelos/empleadoM.php';
require_once 'Modelos/slideM.php';

$rutas = new RutasControlador();
$rutas -> Plantilla();
?>