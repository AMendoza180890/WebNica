<?php
    include_once 'ConexionBD.php';
    class UsuarioCrearM extends ConexionBD{
        public function CrearUsuarioM($tablabd, $datosC){
            try {
                $con = new ConexionBD;
                $pdo = $con->cBD()->prepare("INSERT INTO $tablabd (CatEmpId, CatUsuario, CatPass, CatRol, CatUsuFoto, CatUsuEstado) VALUES (:CatEmpId,:CatUsuario, :CatPass, :CatRol, :CatUsuFoto, 1)");
                $pdo    ->  bindParam(":CatEmpId", $datosC["CatEmpId"],pdo::PARAM_STR);
                $pdo    ->  bindParam(":CatUsuario", $datosC["CatUsuario"], pdo::PARAM_STR);
                $pdo    ->  bindParam(":CatPass", $datosC["CatPass"], pdo::PARAM_STR);
                $pdo    ->  bindParam(":CatRol", $datosC["CatRol"], pdo::PARAM_STR);
                $pdo    ->  bindParam(":CatUsuFoto", $datosC["CatUsuFoto"], pdo::PARAM_STR);
                if ($pdo    ->  execute()) {
                    return true;
                } else {
                    return false;
                }
            } catch (exception $ex) {
                mensajes::error($ex);
            }
        }
    }
?>