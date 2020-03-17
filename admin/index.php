<?php

require_once 'controladores/plantillac.php';
require_once 'controladores/usuarioC.php';
require_once 'controladores/usuarioListC.php';
require_once 'controladores/UsuarioCrearC.php';
require_once 'controladores/EmpListC.php';
require_once 'controladores/UsuarioBorrarC.php';
require_once 'controladores/ActualizarUserC.php';
require_once 'controladores/TratamientoImg.php';
require_once 'controladores/usuarioVerPerfil.php';

require_once 'modelo/EmpListM.php';
require_once 'modelo/UsuarioCrearM.php';
require_once 'modelo/usuarioM.php';
require_once 'modelo/usuarioListM.php';
require_once 'modelo/UsuarioBorrarM.php';
require_once 'modelo/ActualizarUserM.php';
require_once 'modelo/usuarioVerPerfilM.php';



$plantilla = new plantillas();
$plantilla ->callplantilla();
?>