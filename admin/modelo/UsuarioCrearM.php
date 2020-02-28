<?php
    include_once 'ConexionBD.php';
    class UsuarioCrearM extends ConexionBD{
        public function CrearUsuarioM($tablabd, $datosC){
            try {
                $con = new ConexionBD;
                $pdo = $con->cBD()->prepare("INSERT INTO $tablabd (CatEmpId, CatUsuario, CatPass, CatRol, CatUsuFoto) VALUES (:Empleado,:usuario, :clave, :rol, :foto)");
                $pdo    ->  bindParam(":Empleado", $datosC["Empleado"],pdo::PARAM_STR);
                $pdo    ->  bindParam(":usuario", $datosC["usuario"], pdo::PARAM_STR);
                $pdo    ->  bindParam(":clave", $datosC["clave"], pdo::PARAM_STR);
                $pdo    ->  bindParam(":rol", $datosC["rol"], pdo::PARAM_STR);
                $pdo    ->  bindParam(":foto", $datosC["foto"], pdo::PARAM_STR);
            } catch (exception $ex) {
                mensajes::error($ex);
            }
        }
    }
?>