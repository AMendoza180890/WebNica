<?php
    require_once 'conexionBD.php';

    class ContactoM extends ConexionBD{

            public static function contactIngresoM($datosC, $tablaBD){

            $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (CatCliContName,CatCliContEmail,CatCliContAdress,CatCliContMessage)  
                    VALUES (:nombre, :email, :direccion, :mensaje)");

                $pdo->bindParam(":nombre", $datosC["nomb"], PDO::PARAM_STR);
                $pdo->bindParam(":email", $datosC["correo"], PDO::PARAM_STR);
                $pdo->bindParam(":direccion", $datosC["direct"], PDO::PARAM_STR);
                $pdo->bindParam(":mensaje", $datosC["msg"], PDO::PARAM_STR);   

                    if ($pdo -> execute()){
                        return 'bien';
                    } else {
                        return 'error';
                    }
                    $pdo -> close();

                    
    }

}