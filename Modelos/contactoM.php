<?php
    require_once 'conexionBD.php';

    class ContactoM extends ConexionBD{

           static public function contactIngresoM($datosC, $tablaBD){
                try {
                    $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (CatCliContName,CatCliContEmail,CatCliContAdress,CatCliContMessage)  
                        VALUES (:nombre, :email, :direccion, :mensaje)");

                    $pdo -> bindParam(":nombre", $datosC["nomb"], PDO::PARAM_STR);
                    $pdo->bindParam(":email", $datosC["correo"], PDO::PARAM_STR);
                    $pdo->bindParam(":direccion", $datosC["direct"], PDO::PARAM_STR);
                    $pdo->bindParam(":mensaje", $datosC["msg"], PDO::PARAM_STR); 
                    
                    if ($pdo->execute()) {
                        return 'bien';
                    }else{
                        return 'mal';
                    }
                } 
                catch (Exception $ex) {
                    return $ex;
                }
                      
    }

}