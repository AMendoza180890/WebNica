<?php
require_once 'ConexionBD.php';
    class UsuariosM extends ConexionBD{

        public function IngresoUsuarioM($datosC){
            try {
                $con = new ConexionBD();
                $pdo = $con->cBD()->prepare("SELECT CatUsuId, CatUsuario, CatPass, CatUsuFoto, CatRol FROM catusuario WHERE CatUsuario = :CatUsuario");
                $pdo -> bindParam(":CatUsuario",$datosC['CatUsuario'],PDO::PARAM_STR);
                $pdo -> execute();
                return $pdo -> fetch();
            } catch (Exception $ex) {
                mensajes::error($ex);
            }    
            
        }
    }
?>