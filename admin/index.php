<?php

require_once 'controladores/plantillac.php';
require_once 'controladores/usuarioC.php';
require_once 'controladores/usuarioListC.php';

require_once 'modelo/usuarioM.php';
require_once 'modelo/usuarioListM.php';

$plantilla = new plantillas();
$plantilla ->callplantilla();
?>