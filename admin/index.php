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
<<<<<<< HEAD
=======
require_once 'controladores/slideC.php';
require_once 'controladores/TratamientoImgS.php';
>>>>>>> a681ad489f4011fdf3d3e3e39d8e795164ee31b8

require_once 'modelo/EmpListM.php';
require_once 'modelo/UsuarioCrearM.php';
require_once 'modelo/usuarioM.php';
require_once 'modelo/usuarioListM.php';
require_once 'modelo/UsuarioBorrarM.php';
require_once 'modelo/ActualizarUserM.php';
require_once 'modelo/usuarioVerPerfilM.php';
<<<<<<< HEAD

=======
require_once 'modelo/slideM.php';
>>>>>>> a681ad489f4011fdf3d3e3e39d8e795164ee31b8


$plantilla = new plantillas();
$plantilla ->callplantilla();
?>