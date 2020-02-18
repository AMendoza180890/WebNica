<?php
require_once 'ConexionBD.php';
    class UsuariosM extends ConexionBD{

        public function IngresoUsuarioM($datosC, $tablaBD){
            try {
                $con = new ConexionBD();
                $pdo = $con->cBD()->prepare("SELECT CatUsuario, CatPass FROM $tablaBD WHERE CatUsuario = :usuario");
                $pdo -> bindParam(":usuario",$datosC['usuario'],PDO::PARAM_STR);
                $pdo ->execute();
                return $pdo -> fetch();
            } catch (Exception $ex) {
                mensajes::error($ex);
            }    
            
        }
    }
?>