<?php

require_once 'controladores/plantillac.php';
require_once 'controladores/usuarioC.php';
require_once 'controladores/usuarioListC.php';
require_once 'controladores/UsuarioCrearC.php';
require_once 'controladores/EmpListC.php';
require_once 'controladores/UsuarioBorrarC.php';

require_once 'modelo/EmpListM.php';
require_once 'modelo/UsuarioCrearM.php';
require_once 'modelo/usuarioM.php';
require_once 'modelo/usuarioListM.php';
require_once 'modelo/UsuarioBorrarM.php';


$plantilla = new plantillas();
$plantilla ->callplantilla();
?>