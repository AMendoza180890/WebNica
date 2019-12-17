<?php
    require_once 'conexionBD.php';

    class ContactoM extends ConexionBD{

            public function contactIngresoM($datosC, $tablaBD){
                try {
                    $query = $this->cBD()->prepare("INSERT INTO $tablaBD (CatCliContName,CatCliContEmail,CatCliContAdress,CatCliContMessage)  
                        VALUES (:nombre, :email, :direccion, :mensaje)");
                        
                    if ($query->execute(['CatCliContName' => $datosC['nomb'], 'CatCliContEmail' => $datosC['correo'], 'CatCliContAdress' => $datosC['direct'], 'CatCliContMessage' => $datosC['msg']])) {
                        return 'bien';
                    } else {
                        return 'error';
                    }  
                } catch (Exception $ex) {
                    return $ex;
                }
                      
    }

}