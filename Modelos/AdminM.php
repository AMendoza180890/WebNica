<?php
require_once 'conexionBD.php';

class AdminM extends ConexionBD{

    public function IngresoM($datosC, $tabla){
        try {
            $conec = new ConexionBD;
            $pdo = $conec->cBD()->prepare("SELECT CatUsuario, CatPass FROM $tabla WHERE CatUsuario = :usuario AND CatPass = :passw");
            
            $pdo    ->  bindParam(":usuario",   $datosC['Usuario'],     PDO::PARAM_STR);
            $pdo    ->  bindParam(":passw",     $datosC['password'],     PDO::PARAM_STR);

            $pdo ->execute();

            return $pdo->fetch();

        } catch (PDOException $ex) {
            mensajes::error($ex);
        }
        

    }
}
?>