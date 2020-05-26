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
require_once 'controladores/slideC.php';
require_once 'controladores/TratamientoImgS.php';
require_once 'controladores/ServiciosC.php';
require_once 'controladores/CatServiciosC.php';
require_once 'controladores/CatMensajesC.php';
require_once 'controladores/catblogC.php';
require_once 'controladores/tratamientoTexto.php';
require_once 'controladores/catMediaC.php';
require_once 'controladores/CatmultimediaC.php';

require_once 'modelo/EmpListM.php';
require_once 'modelo/UsuarioCrearM.php';
require_once 'modelo/usuarioM.php';
require_once 'modelo/usuarioListM.php';
require_once 'modelo/UsuarioBorrarM.php';
require_once 'modelo/ActualizarUserM.php';
require_once 'modelo/usuarioVerPerfilM.php';
require_once 'modelo/slideM.php';
require_once 'modelo/ServiciosM.php';
require_once 'modelo/CatServiciosM.php';
require_once 'modelo/CatMensajesM.php';
require_once 'modelo/catblogM.php';
require_once 'modelo/catMediaM.php';
require_once 'modelo/catmultimediaM.php';

$plantilla = new plantillas();
$plantilla ->callplantilla();
?>